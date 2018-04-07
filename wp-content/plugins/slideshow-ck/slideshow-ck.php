<?php
/**
 * Plugin Name: Slideshow CK
 * Plugin URI: http://www.wp-pluginsck.com
 * Description: Slideshow CK is a responsive slideshow plugin that show your images with nice effects.
 * Version: 1.1.1
 * Author: Cédric KEIFLIN
 * Author URI: http://www.wp-pluginsck.com/
 * License: GPL2
 * Text Domain: slideshow-ck
 * Domain Path: /language
 */

defined('ABSPATH') or die;
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

define('SLIDESHOWCK_PATH', dirname(__FILE__));
define('SLIDESHOWCK_ADMIN_URL', admin_url('', 'relative') . 'admin.php?page=slideshowck_edit');
define('SLIDESHOWCK_MEDIA_URL', plugins_url('', __FILE__));

class Slideshowck {

	public $pluginname, $pluginurl, $plugindir, $options, $settings, $settings_field, $ispro, $prourl, $pro_class, $params, $fields;

	private $id;
	
	public $default_settings = array();
	
	public $prodaddon_min_version = '1.0.4';

	function __construct() {
		$this->settings_field = 'slideshow-ck_options';
		// $this->options = get_option($this->settings_field);

		// get the params
		$id = isset($_GET['id']) ? $_GET['id'] : 0;
		$options = json_decode(str_replace('|qq|', '"', get_post_meta($id, 'slideshow-ck-params', true)), true); // decode as array
		$this->options = $options;
		$this->prourl = 'http://www.wp-pluginsck.com/en/wordpress-plugins/slideshow-ck';

		// add the needed classes
		require_once(SLIDESHOWCK_PATH . '/includes/class.folder.php');
		require_once(SLIDESHOWCK_PATH . '/includes/class.file.php');
		require_once(SLIDESHOWCK_PATH . '/includes/class.fields.php');
		require_once(SLIDESHOWCK_PATH . '/includes/class.input.php');
		require_once(SLIDESHOWCK_PATH . '/includes/class.browse.php');
		require_once(SLIDESHOWCK_PATH . '/includes/class.helper.php');

		$this->default_settings = SlideshowckHelper::getSettings();

		// $this->ckfields = new SlideshowckFields();
		// Get the instance of the fields library
		if (empty($this->fields)) {
			require_once( SLIDESHOWCK_PATH . '/includes/class.fields.php' );
			$this->fields = new SlideshowckFields();
			$this->fields->pluginurl = SLIDESHOWCK_MEDIA_URL;
			$this->fields->options = $this->options;
			$this->fields->settings_field = $this->settings_field;
			$this->fields->default_settings = $this->default_settings;
		}
	}

	function load_textdomain() {
		load_plugin_textdomain( 'slideshow-ck', false, dirname( plugin_basename( __FILE__ ) ) . '/language/'  );
	}

	function init() {
		// load the translation
		add_action('plugins_loaded', array($this, 'load_textdomain'));

		$this->ispro = false;
		if ( file_exists(WP_PLUGIN_DIR . '/slideshow-ck-pro-addon/class-slideshow-ck-pro-addon.php') && is_plugin_active('slideshow-ck-pro-addon/slideshow-ck-pro-addon.php') ) {
			require_once(WP_PLUGIN_DIR . '/slideshow-ck-pro-addon/class-slideshow-ck-pro-addon.php');
			$this->ispro = true;
			$this->pro_class = new SlideshowckProAddon();
		}

		if (is_admin()) {
			// load the main admin menu items
			add_action('admin_menu', array($this, 'create_admin_menu'), 20);

			// create the custom post type
			// add_action('init', array($this, 'create_post_type'));
			add_action('init', array($this, 'set_actions'));

			// add the get pro link in the plugins list
			add_filter('plugin_action_links', array($this, 'show_pro_message_action_links'), 10, 2);

			// manage ajax calls
			add_action('wp_ajax_slideshowck_add_slide', array($this, 'ajax_add_slide'));
			add_action('wp_ajax_slideshowck_importslidesfromfolder', array( $this, 'import_slides_from_folder'));
			add_action('wp_ajax_slideshowck_load_browser', array($this, 'load_browser'));
		}
		// create the widget
		add_action('widgets_init', array($this, 'create_slideshowck_widget'));
//		$this->load_browser();
	}

	/**
	 * Ajax : load the images from a folder
	 */
	function import_slides_from_folder() {
		// add the needed classes
		if (!class_exists("SlideshowckFolder"))
			require_once(SLIDESHOWCK_PATH . '/includes/class.folder.php');
		$folder = (string) htmlspecialchars($_POST['folder']);
		$files = $this->pro_class->load_images_from_folder($folder);

		if (! $files) {
			echo 'ERROR : No file found, please retry';
			exit();
		}
		$i = 0;
		foreach ($files as $file) {
			$slide = new stdClass();
			$slide->imgname = $folder . '/' . $file;
			$number = (int) $_POST['number'] + $i;
			$this->add_slide($number, $slide);
			$i++;
		}
		exit();
	}

	/**
	 * Ajax : load the images from a folder
	 */
	function load_browser() {
		// error_reporting(-1);
		echo SlideshowckBrowse::showBrowser('folder');
		exit();
	}

	/**
	 * Set some styles for the admin menu icon
	 */
	function set_admin_menu_image_position() {
		?>
		<style type="text/css">#toplevel_page_slideshowck_general .wp-menu-image > img { padding: 12px 0 0 !important; }</style>
		<?php
	}

	/**
	 * Create and register the slideshow widget
	 */
	public function create_slideshowck_widget() {
		require_once( SLIDESHOWCK_PATH . '/includes/widget-slideshowck.php' );
		register_widget('slideshowck_widget');
	}

	/**
	 * Create the slideshowck post type
	 */
	function create_post_type() {
		register_post_type('slideshowck', array(
			'labels' => array(
				'name' => __('Slideshow CK', 'slideshow-ck'),
				'singular_name' => __('Slideshow CK', 'slideshow-ck'),
				'add_new' => __('Add New Slideshow', 'slideshow-ck'),
				'add_new_item' => __('Add New Slideshow', 'slideshow-ck'),
				'edit_item' => __('Edit Slideshow', 'slideshow-ck'),
				'new_item' => __('Add New Slideshow', 'slideshow-ck'),
				'view_item' => __('View Slideshow', 'slideshow-ck'),
				'search_items' => __('Search Slideshow', 'slideshow-ck'),
				'not_found' => __('No events found', 'slideshow-ck'),
				'not_found_in_trash' => __('No events found in trash', 'slideshow-ck')
			),
			'public' => true,
			'exclude_from_search' => true,
			'public' => true,
			'publicly_queryable' => false,
			'show_ui' => false,
			'show_in_menu' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
				)
		);
	}

	/**
	 * Adds action to perform in the plugin
	 */
	function set_actions() {
		// check if we are in the plugin, else exit
		if ( (isset($_REQUEST['page']) && $_REQUEST['page'] != 'slideshowck_general' && $_REQUEST['page'] != 'slideshowck_edit')
			|| !isset($_REQUEST['page'])
			)
			return;

		// init variables
		$post = $post_type = $post_type_object = null;

		// check if the post exists
		if (isset($_GET['id'])) {
			$post_id = (int) $_GET['id'];
		} elseif (isset($_POST['post_ID'])) {
			$post_id = (int) $_POST['post_ID'];
		} else {
			$post_id = 0;
		}

		// get the existing post
		if ($post_id) {
			$post = get_post($post_id);
		}

		if ($post) {
			$post_type = $post->post_type;
		}

		// check if we get a slideshow object
		if (0 !== $post_id && 'slideshowck' !== $post->post_type) {
			wp_die(__('Invalid post type'));
		}

		if (isset($_REQUEST['action']) && $_REQUEST['action'] == 'save' && wp_verify_nonce($_REQUEST['_wpnonce'], 'slideshowck_save')) {
			$ck_post = array(
				'ID' => (int) $post_id,
				'post_title' => sanitize_text_field($_POST['post_title']),
				'post_content' => '',
				'post_type' => 'slideshowck',
				'post_status' => 'publish',
				'comment_status' => 'closed',
				'ping_status' => 'closed'
			);

			// save the post into the database
			$ck_post_id = wp_insert_post($ck_post);

			// Update the meta field for the slideshow settings
			update_post_meta($ck_post_id, 'slideshow-ck-params', $_POST['slideshow-ck-params']);
			update_post_meta($ck_post_id, 'slideshow-ck-slides', $_POST['slideshow-ck-slides']);

			// TODO : ajouter notice en haut de page
			wp_redirect(home_url() . '/wp-admin/admin.php?page=slideshowck_edit&action=updated&id=' . (int) $ck_post_id);
			exit;
		}
	}

	/**
	 * Create menu links in the admin
	 */
	function create_admin_menu() {
		$this->pagehook = $page = add_menu_page('Slideshow CK', 'Slideshow CK', 'administrator', 'slideshowck_general', array($this, 'render_general'), SLIDESHOWCK_MEDIA_URL . '/images/admin_menu.png');
		add_submenu_page('slideshowck_general', __('Slideshow CK'), __('All Slideshows', 'slideshow-ck'), 'administrator', 'slideshowck_general', array($this, 'render_general'));
		$editpage = add_submenu_page('slideshowck_general', __('Edit'), __('Add New', 'slideshow-ck'), 'administrator', 'slideshowck_edit', array($this, 'render_edit'));
		// for a nice menu icon
		add_action('admin_head', array($this, 'set_admin_menu_image_position'), 20);
		

	}

	/**
	 * Load JS / CSS files and codes in the admin
	 */
	function load_admin_assets() {
		?>
		<script type="text/javascript">
			function ckdoajax(func, id) {
				var data = {
					action: func,
					id: id
				};
				jQuery('#slideshowck_admin').html('<div class="ckwait_overlay"></div>');
				// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
				jQuery.post(ajaxurl, data, function(response) {
					jQuery('.ckwait_overlay').remove();
					jQuery('#slideshowck_admin').html(response);
				});
			}
		</script>
		<?php
	}

	/**
	 * Return the HTML code of the field
	 * 
	 * @param string $type
	 * @param string $name
	 * @param mixed $value
	 * @param string $classname
	 * @param mixed $optionsgroup - can be array or string
	 * @param boolean $isfiles
	 * @param string $attribs
	 * @return string - the field html code
	 */
	function get_field($type, $name, $value, $classname = '', $optionsgroup = '', $isfiles = false, $attribs = '') {
		return $this->fields->render($type, $name, $classname, $optionsgroup, $isfiles, $attribs, $value);
	}

	/**
	 * Return the field name
	 * 
	 * @param string $name
	 * @return string
	 */
	// function get_field_name($name) {
		// return sprintf('%s[%s]', $this->settings_field, $name);
	// }

	/**
	 * Return the field value
	 * 
	 * @param string $key
	 * @param mixed $default
	 * @return mixed
	 */
	// function get_field_value($key, $default = null) {
		// if (isset($this->options[$key])) {
			// return $this->options[$key];
		// } else {
			// if ($default == null && isset($this->default_settings[$key]))
				// return $this->default_settings[$key];
		// }
		// return $default;
	// }

	// function get_option($name) {
		// if (isset($this->options[$name])) {
			// return $this->options[$name];
		// } else if (isset($this->default_settings[$name])) {
			// return $this->default_settings[$name];
		// }
		// return null;
	// }

	function show_pro_message_action_links($links, $file) {
		if ($file == plugin_basename(__FILE__)) {
			// array_push($links, '<a href="options-general.php?page=slideshow-ck">' . __('Settings') . '</a>');
			if (!$this->ispro) {
				array_push($links, '<br /><img class="iconck" src="' . SLIDESHOWCK_MEDIA_URL . '/images/star.png" /><a target="_blank" href="' . $this->prourl . '">' . __('Get the PRO Version', 'slideshow-ck') . '</a>');
			} else {
				array_push($links, '<br /><img class="iconck" src="' . SLIDESHOWCK_MEDIA_URL . '/images/tick.png" /><span style="color: green;">' . __('You are using the PRO Version. Thank you !', 'slideshow-ck') . '</span>');
				if ($this->check_proaddon_version()) : 
					array_push($links, '<br /><a href="http://www.wp-pluginsck.com" target="_blank"><img src="'. SLIDESHOWCK_MEDIA_URL .'/images/exclamation.png" /><span style="color: red;">'. __('Pro Addon must be updated !','slideshow-ck') .'</span></a>');
				endif;
			}
		}
		return $links;
	}

	function show_pro_message_settings_page() {
		?>
		<div class="ckcheckproversion">
			<?php if (!file_exists(SLIDESHOWCK_PATH . '/slideshow-ck-pro.php')) : ?>
				<img class="iconck" src="<?php echo SLIDESHOWCK_MEDIA_URL ?>/images/star.png" />
				<a target="_blank" href="<?php echo $this->prourl ?>"><?php _e('Get the PRO Version', 'slideshow-ck'); ?></a>
			<?php endif; ?>
			<?php if ($this->check_proaddon_version()) : ?><a href="http://www.wp-pluginsck.com" class="ckbutton" target="_blank"><img class="ckicon" src="<?php echo SLIDESHOWCK_MEDIA_URL ?>/images/exclamation.png" /><span style="color: red;"><?php _e('Pro Addon must be updated !','slideshow-ck') ?></span></a><?php endif; ?>
		</div>
		<?php
	}

	/*
	 * Get the plugin data and compare it to the min needed version
	 * 
	 * @return true if needs update
	 */
	public function check_proaddon_version() {
		if (! file_exists(WP_PLUGIN_DIR . '/slideshow-ck-pro-addon/slideshow-ck-pro-addon.php')) return false;
		$manifest = get_plugin_data( WP_PLUGIN_DIR . '/slideshow-ck-pro-addon/slideshow-ck-pro-addon.php', $markup = true, $translate = true );
		return (version_compare($this->prodaddon_min_version, $manifest['Version']) > 0);
	}
	
	function render_general() {
		?>
		<div id="slideshowck_admin">
			<?php
			require_once(SLIDESHOWCK_PATH . '/includes/layout.general.php');
			?>
		</div>
		<?php
	}

	/**
	 * Load the edition page
	 */
	function render_edit() {
		require_once(SLIDESHOWCK_PATH . '/includes/layout.edit.php');
	}

	/**
	 * Create an empty slide
	 */
	function ajax_add_slide() {
		$number = (int) $_POST['number'];
		$this->add_slide($number);
		die;
	}

	/**
	 * Render the HTML code of a slide
	 * 
	 * @param integer $i		the slide number
	 * @param object $options	the slide options
	 */
	function add_slide($i = false, $options = null) {
		$options = $this->clean_options($options);
		?>
		<div id="ckslide<?php echo $i; ?>" class="ckslide">
			<div class="ckslidehandle">
				<div class="ckslidenumber"><?php echo $i; ?></div>
			</div>
			<div class="ckslidedelete" onclick="javascript:ckRemoveSlide(jQuery(this).parents('.ckslide')[0]);" name="ckslidedelete<?php echo $i; ?>">X</div>
			<div class="ckslidecontainer">
				<div class="cksliderow">
					<div class="ckslideimgcontainer">
						<img class="ckslideimgthumb" width="64" height="64" src="<?php echo get_site_url() . '/' . $options->imgname; ?>">
					</div>
					<input id="ckslideimgname<?php echo $i; ?>" class="ckslideimgname" type="text" onchange="javascript:ckAddImageUrToSlide(this, this.value);" value="<?php echo trim(str_replace(get_site_url(), '', $options->imgname), '/'); ?>" title="" name="ckslideimgname<?php echo $i; ?>">
					<a class="button button-secondary" onclick="ckOpenMediaManager(this);"><?php _e('Select') ?></a>
					<br />
					<span class="ckslidelabel"><?php _e('Title') ?></span>
					<input class="ckslidetitle" type="text" value="<?php echo $this->get_param('title', '', $options); ?>" name="ckslidetitle<?php echo $i; ?>">
					<br />
					<span class="ckslidelabel"><?php _e('Description') ?></span>
					<input class="ckslidedescription" type="text" value="<?php echo $this->get_param('description', '', $options); ?>" name="ckslidedescription<?php echo $i; ?>">

				</div>
					 <div class="ckslideoptionstoggler" onclick="jQuery('+ .ckslideoptions', jQuery(this)).toggle('fast');
								jQuery(this).toggleClass('open');"><?php _e('Options') ?></div>
				<div class="cksliderow ckslideoptions">
					<div id="ckslideaccordion<?php echo $i; ?>">
						<span class="menulinkck current" tab="tab_slideoptions_duration<?php echo $i; ?>"><?php _e('Duration', 'slideshow-ck') ?></span>
						<span class="menulinkck" tab="tab_slideoptions_alignment<?php echo $i; ?>"><?php _e('Alignment', 'slideshow-ck') ?></span>
						<span class="menulinkck" tab="tab_slideoptions_link<?php echo $i; ?>"><?php _e('Link', 'slideshow-ck') ?></span>
						<span class="menulinkck" tab="tab_slideoptions_video<?php echo $i; ?>"><?php _e('Video', 'slideshow-ck') ?></span>
						<div style="clear:both;"></div>
						<div class="tabck menustyles current" id="tab_slideoptions_duration<?php echo $i; ?>">
							<div class="cksliderow">
								<span>
									<span class="ckslidelabel"><?php _e('Slide duration', 'slideshow-ck') ?></span>
									<img align="top" title="" style="float: none;" src="<?php echo SLIDESHOWCK_MEDIA_URL; ?>/images/hourglass.png">
									<input class="ckslideimgtime" type="text" style="width:65px;" value="<?php echo $this->get_param('imgtime', '', $options); ?>" name="ckslideimgtime<?php echo $i; ?>">
								</span>
								<span>ms</span>
								<span class="ckslidelabeldesc"><?php _e('Leave it blank to use the global setting', 'slideshow-ck'); ?></span>
							</div>
						</div>
						<div class="tabck menustyles" id="tab_slideoptions_alignment<?php echo $i; ?>" >
							<div class="cksliderow">
								<span class="ckslidelabel"><?php _e('Image alignment', 'slideshow-ck'); ?></span>
								<img align="top" title="" style="float: none;" src="<?php echo SLIDESHOWCK_MEDIA_URL; ?>/images/image_alignment.png">
								<?php
								$options_ckslidedataalignmenttext = array(
									'default' => __('default', 'slideshow-ck')
									, 'topLeft' => __('top left', 'slideshow-ck')
									, 'topCenter' => __('top center', 'slideshow-ck')
									, 'topRight' => __('top right', 'slideshow-ck')
									, 'centerLeft' => __('center left', 'slideshow-ck')
									, 'center' => __('center', 'slideshow-ck')
									, 'centerRight' => __('center right', 'slideshow-ck')
									, 'bottomLeft' => __('bottom left', 'slideshow-ck')
									, 'bottomCenter' => __('bottom center', 'slideshow-ck')
									, 'bottomRight' => __('bottom right', 'slideshow-ck')
								);
								echo $this->fields->render('select', 'ckslidedataalignmenttext' . $i, 'ckslidedataalignmenttext', $options_ckslidedataalignmenttext, false, '', $this->get_param('imgalignment', '', $options));
								?>
							</div>
						</div>
						<div class="tabck menustyles" id="tab_slideoptions_link<?php echo $i; ?>" >
							<div class="cksliderow">
								<span class="ckslidelabel"><?php _e('Link url', 'slideshow-ck'); ?></span>
								<img align="top" title="" style="float: none;" src="<?php echo SLIDESHOWCK_MEDIA_URL; ?>/images/link.png">
								<input class="ckslidelinktext" type="text" value="<?php echo $this->get_param('imglink', '', $options); ?>" name="ckslidelinktext<?php echo $i; ?>">
							</div>
							<div class="cksliderow">
								<span class="ckslidelabel"><?php _e('Target', 'slideshow-ck'); ?></span>
								<img align="top" title="" style="float: none;" src="<?php echo SLIDESHOWCK_MEDIA_URL; ?>/images/link_go.png">
								<?php
								if ($this->ispro) {
									$options_ckslidetargettext = array(
										'default' => __('Default', 'slideshow-ck')
										, '_parent' => __('Open in the same window', 'slideshow-ck')
										, '_blank' => __('Open in a new window', 'slideshow-ck')
										, 'lightbox'=> __('Open in a Lightbox', 'slideshow-ck')
									);
								} else {
									$options_ckslidetargettext = array(
										'default' => __('Default', 'slideshow-ck')
										, '_parent' => __('Open in the same window', 'slideshow-ck')
										, '_blank' => __('Open in a new window', 'slideshow-ck')
											// , 'lightbox'=>__('Open in a Lightbox')
									);
								}
								echo $this->fields->render('select', 'ckslidetargettext' . $i, 'ckslidetargettext', $options_ckslidetargettext, false, '', $this->get_param('imgtarget', '', $options));
								?>
							</div>
						</div>
						<div class="tabck menustyles" id="tab_slideoptions_video<?php echo $i; ?>">
							<div class="cksliderow">
								<span class="ckslidelabel"><?php _e('Video url', 'slideshow-ck'); ?></span>
								<img align="top" title="" style="float: none;" src="<?php echo SLIDESHOWCK_MEDIA_URL; ?>/images/film.png">
								<input class="ckslidevideotext" type="text" value="<?php echo $this->get_param('imgvideo', '', $options); ?>" name="ckslidevideotext<?php echo $i; ?>">
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div> 
		<?php
		// fin ckslide
	}

	/**
	 * Do some work with the slide options
	 * 
	 * @param object $options		the slide options
	 * @return object				the slide options modified
	 */
	function clean_options($options) {
		if ($options == null) $options = new stdClass();
		$options->imgname = isset($options->imgname) ? $options->imgname : str_replace(get_site_url(), '', SLIDESHOWCK_MEDIA_URL) . '/images/unknown.png';

		return $options;
	}

	/**
	 * Get the value of a params from a params object list
	 * 
	 * @param string $key
	 * @param mixed $default
	 * @param object $params
	 * @return mixed the param value
	 */
	function get_param($key, $default = null, $params = null) {
		if ( $params === null ) {
			$params = $this->params;
		}
		
		if (isset($params->$key) && $params->$key != '') {
			return $params->$key;
		} else {
			if ($default == null && isset($this->default_settings[$key]))
				return $this->default_settings[$key];
		}
		return $default;
	}

	/**
	 * Test if there is already a unit, else add the px
	 *
	 * @param string $value
	 * @return string
	 */
	private function test_unit($value) {
		if ((stristr($value, 'px')) OR ( stristr($value, 'em')) OR ( stristr($value, '%')))
			return $value;

		return $value . 'px';
	}

	public function renderProMessage() {
		return __('Only available in the Pro Addon', 'slideshow-ck');
	}

	/**
	 * Create the css array from the params
	 * 
	 * @param string $prefix
	 * @return array of styles
	 */
	function create_css($prefix = '') {
		$css = Array();
		// $css['paddingtop'] = ($this->get_param($prefix.'paddingtop')) ? 'padding-top: ' . $this->get_param($prefix.'paddingtop', '0').'px;' : '';
		// $css['paddingright'] = ($this->get_param($prefix.'paddingright')) ? 'padding-right: ' . $this->get_param($prefix.'paddingright', '0').'px;' : '';
		// $css['paddingbottom'] = ($this->get_param($prefix.'paddingbottom') ) ? 'padding-bottom: ' . $this->get_param($prefix.'paddingbottom', '0').'px;' : '';
		// $css['paddingleft'] = ($this->get_param($prefix.'paddingleft')) ? 'padding-left: ' . $this->get_param($prefix.'paddingleft', '0').'px;' : '';
		// $css['margintop'] = ($this->get_param($prefix.'margintop')) ? 'margin-top: ' . $this->get_param($prefix.'margintop', '0').'px;' : '';
		// $css['marginright'] = ($this->get_param($prefix.'marginright')) ? 'margin-right: ' . $this->get_param($prefix.'marginright', '0').'px;' : '';
		// $css['marginbottom'] = ($this->get_param($prefix.'marginbottom')) ? 'margin-bottom: ' . $this->get_param($prefix.'marginbottom', '0').'px;' : '';
		// $css['marginleft'] = ($this->get_param($prefix.'marginleft')) ? 'margin-left: ' . $this->get_param($prefix.'marginleft', '0').'px;' : '';
		// $css['background'] = ($this->get_param($prefix.'bgcolor1')) ? 'background-color: ' . $this->get_param($prefix.'bgcolor1').';' : '';
		// $css['background'] .= ($this->get_param($prefix.'bgimage')) ? 'background-image: url("' . JURI::ROOT() . $this->get_param($prefix.'bgimage').'");' : '';
		// $css['background'] .= ($this->get_param($prefix.'bgimage')) ? 'background-repeat: ' . $this->get_param($prefix.'bgimagerepeat').';' : '';
		// $css['background'] .= ($this->get_param($prefix.'bgimage')) ? 'background-position: ' . $this->get_param($prefix.'bgpositionx').' ' . $this->get_param($prefix.'bgpositiony').';' : '';
		$csspaddingtop = ($this->get_param($prefix . 'paddingtop') ) ? 'padding-top: ' . $this->test_unit($this->get_param($prefix . 'paddingtop', '0')) . ';' : '';
		$csspaddingright = ($this->get_param($prefix . 'paddingright') ) ? 'padding-right: ' . $this->test_unit($this->get_param($prefix . 'paddingright', '0')) . ';' : '';
		$csspaddingbottom = ($this->get_param($prefix . 'paddingbottom') ) ? 'padding-bottom: ' . $this->test_unit($this->get_param($prefix . 'paddingbottom', '0')) . ';' : '';
		$csspaddingleft = ($this->get_param($prefix . 'paddingleft') ) ? 'padding-left: ' . $this->test_unit($this->get_param($prefix . 'paddingleft', '0')) . ';' : '';
		$css['padding'] = $csspaddingtop . $csspaddingright . $csspaddingbottom . $csspaddingleft;
		$cssmargintop = ($this->get_param($prefix . 'margintop') ) ? 'margin-top: ' . $this->test_unit($this->get_param($prefix . 'margintop', '0')) . ';' : '';
		$cssmarginright = ($this->get_param($prefix . 'marginright') ) ? 'margin-right: ' . $this->test_unit($this->get_param($prefix . 'marginright', '0')) . ';' : '';
		$cssmarginbottom = ($this->get_param($prefix . 'marginbottom') ) ? 'margin-bottom: ' . $this->test_unit($this->get_param($prefix . 'marginbottom', '0')) . ';' : '';
		$cssmarginleft = ($this->get_param($prefix . 'marginleft') ) ? 'margin-left: ' . $this->test_unit($this->get_param($prefix . 'marginleft', '0')) . ';' : '';
		$css['margin'] = $cssmargintop . $cssmarginright . $cssmarginbottom . $cssmarginleft;
		$bgcolor1 = ($this->get_param($prefix . 'bgcolor1') && $this->get_param($prefix . 'bgopacity')) ? $this->hex2RGB($this->get_param($prefix . 'bgcolor1'), $this->get_param($prefix . 'bgopacity')) : $this->get_param($prefix . 'bgcolor1');
		$css['background'] = ($this->get_param($prefix . 'bgcolor1') ) ? 'background: ' . $bgcolor1 . ';' : '';
		$css['background'] .= ( $this->get_param($prefix . 'bgimage') ) ? 'background-image: url("' . get_site_url() . $this->get_param($prefix . 'bgimage') . '");' : '';
		$css['background'] .= ( $this->get_param($prefix . 'bgimage') ) ? 'background-repeat: ' . $this->get_param($prefix . 'bgimagerepeat') . ';' : '';
		$css['background'] .= ( $this->get_param($prefix . 'bgimage') ) ? 'background-position: ' . $this->get_param($prefix . 'bgpositionx') . ' ' . $this->get_param($prefix . 'bgpositiony') . ';' : '';
		$css['gradient'] = ($css['background'] AND $this->get_param($prefix . 'bgcolor2') ) ?
				"background: -moz-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%, " . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: -webkit-gradient(linear, left top, left bottom, color-stop(0%," . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . "), color-stop(100%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . ")); "
				. "background: -webkit-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: -o-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: -ms-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%); "
				. "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . "', endColorstr='" . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . "',GradientType=0 );" : '';
		$css['gradient'] = ($css['background'] AND $this->get_param($prefix . 'bgcolor2')) ?
				"background: -moz-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%, " . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: -webkit-gradient(linear, left top, left bottom, color-stop(0%," . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . "), color-stop(100%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . ")); "
				. "background: -webkit-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: -o-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: -ms-linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%);"
				. "background: linear-gradient(top,  " . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . " 0%," . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . " 100%); "
				. "filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='" . $this->get_param($prefix . 'bgcolor1', '#f0f0f0') . "', endColorstr='" . $this->get_param($prefix . 'bgcolor2', '#e3e3e3') . "',GradientType=0 );" : '';
		$css['borderradius'] = ($this->get_param($prefix . 'roundedcornerstl', '0') && $this->get_param($prefix . 'roundedcornerstr', '0') && $this->get_param($prefix . 'roundedcornersbr', '0') && $this->get_param($prefix . 'roundedcornersbl', '0')) ?
				'-moz-border-radius: ' . $this->get_param($prefix . 'roundedcornerstl', '0') . 'px ' . $this->get_param($prefix . 'roundedcornerstr', '0') . 'px ' . $this->get_param($prefix . 'roundedcornersbr', '0') . 'px ' . $this->get_param($prefix . 'roundedcornersbl', '0') . 'px;'
				. '-webkit-border-radius: ' . $this->get_param($prefix . 'roundedcornerstl', '0') . 'px ' . $this->get_param($prefix . 'roundedcornerstr', '0') . 'px ' . $this->get_param($prefix . 'roundedcornersbr', '0') . 'px ' . $this->get_param($prefix . 'roundedcornersbl', '0') . 'px;'
				. 'border-radius: ' . $this->get_param($prefix . 'roundedcornerstl', '0') . 'px ' . $this->get_param($prefix . 'roundedcornerstr', '0') . 'px ' . $this->get_param($prefix . 'roundedcornersbr', '0') . 'px ' . $this->get_param($prefix . 'roundedcornersbl', '0') . 'px;' : '';
		$shadowinset = $this->get_param($prefix . 'shadowinset', 0) ? 'inset ' : '';
		$css['shadow'] = ($this->get_param($prefix . 'shadowcolor') AND $this->get_param($prefix . 'shadowblur')) ?
				'-moz-box-shadow: ' . $shadowinset . ($this->get_param($prefix . 'shadowoffsetx', '0') ? $this->test_unit($this->get_param($prefix . 'shadowoffsetx', '0')) : '0') . ' ' . ($this->get_param($prefix . 'shadowoffsety', '0') ? $this->test_unit($this->get_param($prefix . 'shadowoffsety', '0')) : '0') . ' ' . $this->test_unit($this->get_param($prefix . 'shadowblur', '')) . ' ' . ($this->get_param($prefix . 'shadowspread', '0') ? $this->test_unit($this->get_param($prefix . 'shadowspread', '0')) : '0') . ' ' . $this->get_param($prefix . 'shadowcolor', '') . ';'
				. '-webkit-box-shadow: ' . $shadowinset . ($this->get_param($prefix . 'shadowoffsetx', '0') ? $this->test_unit($this->get_param($prefix . 'shadowoffsetx', '0')) : '0') . ' ' . ($this->get_param($prefix . 'shadowoffsety', '0') ? $this->test_unit($this->get_param($prefix . 'shadowoffsety', '0')) : '0') . ' ' . $this->test_unit($this->get_param($prefix . 'shadowblur', '')) . ' ' . ($this->get_param($prefix . 'shadowspread', '0') ? $this->test_unit($this->get_param($prefix . 'shadowspread', '0')) : '0') . ' ' . $this->get_param($prefix . 'shadowcolor', '') . ';'
				. 'box-shadow: ' . $shadowinset . ($this->get_param($prefix . 'shadowoffsetx', '0') ? $this->test_unit($this->get_param($prefix . 'shadowoffsetx', '0')) : '0') . ' ' . ($this->get_param($prefix . 'shadowoffsety', '0') ? $this->test_unit($this->get_param($prefix . 'shadowoffsety', '0')) : '0') . ' ' . $this->test_unit($this->get_param($prefix . 'shadowblur', '')) . ' ' . ($this->get_param($prefix . 'shadowspread', '0') ? $this->test_unit($this->get_param($prefix . 'shadowspread', '0')) : '0') . ' ' . $this->get_param($prefix . 'shadowcolor', '') . ';' : '';
		$css['border'] = ($this->get_param($prefix . 'bordercolor') AND $this->get_param($prefix . 'borderwidth')) ?
				'border: ' . $this->get_param($prefix . 'bordercolor', '#efefef') . ' ' . $this->test_unit($this->get_param($prefix . 'borderwidth', '1')) . ' solid;' : '';
		$css['fontsize'] = ($this->get_param($prefix . 'fontsize')) ?
				'font-size: ' . $this->test_unit($this->get_param($prefix . 'fontsize')) . ';'
				. 'line-height: ' . $this->test_unit($this->get_param($prefix . 'fontsize')) . ';' : '';
		$css['fontcolor'] = ($this->get_param($prefix . 'fontcolor')) ?
				'color: ' . $this->get_param($prefix . 'fontcolor') . ';' : '';
		$css['fontweight'] = ($this->get_param($prefix . 'fontweight')) ?
				'font-weight: ' . $this->get_param($prefix . 'fontweight') . ';' : '';
		$css['fontfamily'] = ($this->get_param($prefix . 'fontfamily')) ?
				'font-family: ' . $this->get_param($prefix . 'fontfamily') . ';' : '';
		return $css;
	}

	/**
	 * Convert a hexa decimal color code to its RGB equivalent
	 *
	 * @param string $hexStr (hexadecimal color value)
	 * @param boolean $returnAsString (if set true, returns the value separated by the separator character. Otherwise returns associative array)
	 * @param string $seperator (to separate RGB values. Applicable only if second parameter is true.)
	 * @return array or string (depending on second parameter. Returns False if invalid hex color value)
	 */
	static function hex2RGB($hexStr, $opacity) {
		return SlideshowckHelper::hex2RGB($hexStr, $opacity);
	}

	function render_slideshow($id) {
		$this->id = $id;
		$params = json_decode(str_replace('|qq|', '"', get_post_meta($id, 'slideshow-ck-params', TRUE)));
		$this->params = $params;
		
		$items = $this->get_items($id);

		if ($this->get_param('displayorder', 'normal') == 'shuffle') {
			shuffle($items);
		}
		$width = ($this->get_param('width') AND $this->get_param('width') != 'auto') ? ' style="width:' . $this->test_unit($this->get_param('width')) . ';"' : '';
		$this->load_slideshow_assets();
		ob_start();
		?>
		<div class="slideshowck camera_wrap <?php echo $this->get_param('skin'); ?>" id="camera_wrap_<?php echo $id; ?>"<?php echo $width; ?>>
			<?php
			for ($i = 0; $i < count($items); ++$i) {
				if ($this->get_param('displayorder', 'normal') == 'shuffle' && $this->get_param('limitslides', '') && $i >= $this->get_param('limitslides', ''))
					break;
				$item = $items[$i];
				// set the variables for each item
				$this->get_item_data($item);
				if ($item->imgalignment != 'default') {
					$dataalignment = ' data-alignment="' . $item->imgalignment . '"';
				} else {
					$dataalignment = '';
				}
				$imgtarget = ($item->imgtarget == 'default') ? $this->get_param('imagetarget') : $item->imgtarget;
				$datatitle = ($this->get_param('lightboxcaption', 'caption') != 'caption') ? 'data-title="' . htmlspecialchars(str_replace("\"", "&quot;", str_replace(">", "&gt;", str_replace("<", "&lt;", $datacaption)))) . '" ' : '';
				$dataalbum = ($this->get_param('lightboxgroupalbum', '0')) ? '[albumslideshowck' . $module->id . ']' : '';
				$datarel = ($imgtarget == 'lightbox') ? 'data-rel="lightbox' . $dataalbum . '" ' : '';
				$datatime = ($item->imgtime) ? ' data-time="' . $item->imgtime . '"' : '';
				?>
				<div <?php echo $datarel . $datatitle; ?>data-thumb="<?php echo get_site_url() . '/' . trim($item->imgthumb, '/'); ?>" data-src="<?php echo get_site_url() . '/' . trim($item->imgname, '/'); ?>" <?php
				if ($item->imglink)
					echo 'data-link="' . $item->imglink . '" data-target="' . $imgtarget . '"';
				echo $dataalignment . $datatime;
				?>>
						<?php if ($item->imgvideo) { ?>
						<iframe src="<?php echo $item->imgvideo; ?>" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						<?php
					}
					if (($item->title || $item->description) && (($this->get_param('lightboxcaption', 'caption') != 'title' || $imgtarget != 'lightbox') || !$item->imglink)) {
						?>
						<div class="camera_caption <?php echo $this->get_param('captioneffect', 'moveFromBottom') ?>">
							<div class="camera_caption_title">
								<?php echo str_replace("|dq|", "\"", $item->title); ?>
							</div>
							<div class="camera_caption_desc">
								<?php echo str_replace("|dq|", "\"", $item->description); ?>
							</div>
						</div>
						<?php
					}
					?>
				</div>
			<?php } ?>
		</div>
		<div style="clear:both;"></div>
		<?php
		$output = ob_get_contents();
		ob_end_clean();
		return $output;
	}

	function get_item_data($item) {
		// set the variables
		if (!isset($item->video))
			$item->video = null;
		if (!isset($item->title))
			$item->title = null;
		if (!isset($item->description))
			$item->description = null;
		if (!isset($item->article))
			$item->article = null;
		if (!isset($item->imgalignment))
			$item->imgalignment = null;
		if (!isset($item->imgtarget))
			$item->imgtarget = null;
		if (!isset($item->imgtime))
			$item->imgtime = null;
		if (!isset($item->imglink))
			$item->imglink = null;
		if (!isset($item->imgthumb))
			$item->imgthumb = $item->imgname;
	}

	function load_slideshow_assets() {
		$id = $this->id;
		
		// set the navigation variables
		switch ($this->get_param('navigation', '2')) {
			case 0:
				// aucune
				$navigation = "navigationHover: false,
						navigation: false,
						playPause: false,
						";
				break;
			case 1:
				// toujours
				$navigation = "navigationHover: false,
						navigation: true,
						playPause: true,
						";
				break;
			case 2:
			default:
				// on mouseover
				$navigation = "navigationHover: true,
						navigation: true,
						playPause: true,
						";
				break;
		}
		$theme = $this->get_param('theme', 'default');
		// load the caption styles
		$title_css = $this->create_css('captiontitle_');
		$desc_css = $this->create_css('captiondesc_');
		$caption_css = $this->create_css('caption_');
		/*
		  $fontfamily = ($this->get_param('captionstylesusefont', '0') && $this->get_param('captionstylestextgfont', '0')) ? "font-family:'" . $this->get_param('captionstylestextgfont', 'Droid Sans') . "';" : '';
		  if ($fontfamily) {
		  $gfonturl = str_replace(" ", "+", $this->get_param('captionstylestextgfont', 'Droid Sans'));
		  $document->addStylesheet('https://fonts.googleapis.com/css?family=' . $gfonturl);
		  } */
		wp_enqueue_script('jquery-easing', SLIDESHOWCK_MEDIA_URL . '/assets/jquery.easing.1.3.js');
		// wp_enqueue_script('jquery-mobile', SLIDESHOWCK_MEDIA_URL . '/assets/jquery.mobile.customized.min.js');
		wp_enqueue_script('slideshowck', SLIDESHOWCK_MEDIA_URL . '/assets/camera.min.js');

		$js = "jQuery(document).ready(function(){
				new Slideshowck('#camera_wrap_" . $id. "', {
					height: '" .  $this->get_param('height', '400') . "',
					minHeight: '',
					pauseOnClick: false,
					hover: '" .  $this->get_param('hover', '1') . "',
					fx: '" .  implode(",", $this->get_param('effect', array('random'))) . "',
					loader: '" .  $this->get_param('loader', 'pie') . "',
					pagination: '" .  $this->get_param('pagination', '1') . "',
					thumbnails: '" .  $this->get_param('thumbnails', '1') . "',
					thumbheight: '" .  $this->get_param('thumbnailheight', '100') . "',
					thumbwidth: '" .  $this->get_param('thumbnailwidth', '75') . "',
					time: '" .  $this->get_param('time', '7000') . "',
					transPeriod: " .  $this->get_param('transperiod', '1500') . ",
					alignment: 'center',
					autoAdvance: '" .  $this->get_param('autoAdvance', '1') . "',
					mobileAutoAdvance: '" .  $this->get_param('autoAdvance', '1') . "',
					portrait: '" .  $this->get_param('portrait', '0') . "',
					barDirection: '" .  $this->get_param('barDirection', 'leftToRight') . "',
					imagePath: '" .  SLIDESHOWCK_MEDIA_URL . "/images/',
					lightbox: '" .  $this->get_param('lightboxtype', 'mediaboxck') . "',
					fullpage: '" .  $this->get_param('fullpage', '0') . "',
					container: '" .  $this->get_param('container', '') . "',
					//mobileimageresolution: '" .  ($this->get_param('usemobileimage', '0') ? $this->get_param('mobileimageresolution', '640') : '0') . "',
					" .  $navigation . "
					barPosition: '" .  $this->get_param('barPosition', 'bottom') . "'
					});
				});";
		?>
		<link href="<?php echo SLIDESHOWCK_MEDIA_URL ?>/themes/<?php echo $theme ?>/css/camera.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			#camera_wrap_<?php echo $id; ?> .camera_pag_ul li img, #camera_wrap_<?php echo $id; ?> .camera_thumbs_cont ul li img {
				height:<?php echo $this->test_unit($this->get_param('thumbnailheight', '75')); ?>;
				width: auto;
			}
			#camera_wrap_<?php echo $id; ?> .camera_caption {
				display: block;
				position: absolute;
			}
			#camera_wrap_<?php echo $id; ?> .camera_caption > div {
				<?php echo $caption_css['padding'] . $caption_css['margin'] . $caption_css['background'] . $caption_css['gradient'] . $caption_css['borderradius'] . $caption_css['shadow'] . $caption_css['border'] ?>
			}
			#camera_wrap_<?php echo $id; ?> .camera_caption div.camera_caption_title {
				<?php echo $title_css['fontcolor'] . $title_css['fontsize'] . $title_css['fontweight'] . $title_css['fontfamily'] ?>
			}
			#camera_wrap_<?php echo $id; ?> .camera_caption div.camera_caption_desc {
				<?php echo $desc_css['fontcolor'] . $desc_css['fontsize'] . $desc_css['fontweight'] . $desc_css['fontfamily'] ?>
			}
		</style>
		<?php
		wp_add_inline_script('slideshowck', $js);
	}

	/**
	 * Get the items depending on the option selected in the slideshow
	 * 
	 * @param integer $id the slideshowck post ID
	 * @return array of objects
	 */
	protected function get_items($id) {
		if ( isset($this->pro_class) && ! empty($this->pro_class) ) {
			$this->pro_class->params = $this->params;
		} else if (class_exists('SlideshowckProAddon')) {
			$this->pro_class = new SlideshowckProAddon();
			$this->pro_class->params = $this->params;
		}
		$items = array();
		switch ( $this->get_param('slides_sources') ) {
			case 'slidesmanager':
			default:
				$items = json_decode(str_replace('|qq|', '"', get_post_meta($id, 'slideshow-ck-slides', TRUE)));
				break;
			case 'autoloadfolder':
				if (class_exists('SlideshowckProAddon')) $items = $this->pro_class->get_items_autoloadfolder($id);
				break;
		}

		return $items;
	}

	public function copyright() {
		$html = array();
		$html[] = '<hr style="margin:10px 0;clear:both;" />';
		$html[] = '<div class="ckpoweredby">' . __('Developped By', 'slideshow-ck') . ' CK on <a href="http://www.wp-pluginsck.com" target="_blank">http://www.wp-pluginsck.com</a></div>';
		$html[] = '<div class="ckinfo"><img src="' . SLIDESHOWCK_MEDIA_URL . '/images/page_white_acrobat.png" width="" height="" /> <a href="https://www.wp-pluginsck.com/en/download/view_document/134-slideshow-ck-documentation" target="_blank">' . __('Download the documentation', 'slideshow-ck') . '</a></div>';
		$html[] = '<div class="ckinfo"><img src="' . SLIDESHOWCK_MEDIA_URL . '/images/star.png" width="" height="" /> <a href="https://www.wp-pluginsck.com/en/wordpress-plugins/slideshow-ck" target="_blank">' . __('Download the Pro Addon', 'slideshow-ck') . '</a></div>';

		return implode($html);
	}
}



function Slideshowck_loadjquery() {
	wp_enqueue_script('jquery');
}

// load the process
$slideshowckClass = new Slideshowck();
$slideshowckClass->init();

if (!is_admin()) {
	/**
	 * Render the slideshow in the page
	 * 
	 * @param integer $id the slideshow ID
	 */
	function do_slideshowck($id) {
		echo get_slideshowck($id);
	}

	/**
	* Get the slideshow 
	* 
	* @param integer $id the slideshow ID
	*/
	function get_slideshowck($id) {
		add_thickbox();
		$slideshowckClass = new Slideshowck();
		return $slideshowckClass->render_slideshow($id);
	}
	
	// load jquery in frontend
	add_action('init', 'Slideshowck_loadjquery');
} else {
	/**
	 * Empty functiosn to avoid to load a slideshow in the admin and avoid an error if the function is called
	 * 
	 * @param integer $id the slideshow ID
	 * @return type
	 */
	function do_slideshowck($id) {
		return;
	}
	
	function get_slideshowck($id) {
		return;
	}
}

// register the shortcode to call the slideshow
add_shortcode( 'slideshowck', 'shortcode_slideshowck' );

/**
 * Render the slideshow using the shortcode
 * 
 * @param type $attr
 * @return the slideshow or null
 */
function shortcode_slideshowck($attr) {
	if ( isset($attr['id']) ) {
		return get_slideshowck( (int) $attr['id'] );
	}
	return null;
}