<?php
/*
 * Plugin Name: Very Simple Event List
 * Description: This is a lightweight plugin to create a customized event list. Add the shortcode on a page or use the widget to display your events.
 * Version: 10.7
 * Author: Guido
 * Author URI: https://www.guido.site
 * License: GNU General Public License v3 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: very-simple-event-list
 * Domain Path: /translation
 */

// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// load plugin text domain
function vsel_init() {
	load_plugin_textdomain( 'very-simple-event-list', false, dirname( plugin_basename( __FILE__ ) ) . '/translation' );
}
add_action('plugins_loaded', 'vsel_init');

// enqueue css script
function vsel_frontend_scripts() {
	wp_enqueue_style( 'vsel_style', plugins_url('/css/vsel-style.min.css',__FILE__ ) );
}
add_action('wp_enqueue_scripts', 'vsel_frontend_scripts');

// the sidebar widget
function register_vsel_widget() {
	register_widget( 'vsel_widget' );
}
add_action( 'widgets_init', 'register_vsel_widget' );

// set date formats for datepicker
function vsel_datepicker_dateformat( $dateformat ) {
	if ($dateformat == 'j F Y' || $dateformat == 'd/m/Y' || $dateformat == 'd-m-Y') {
		$dateformat = 'dd-mm-yy';
	} else {
		$dateformat = 'yy-mm-dd';
	}
	return $dateformat;
}

// enqueue datepicker script
function vsel_enqueue_date_picker() {
	global $wp_locale;
	global $post_type;

	if( 'event' != $post_type )
	return;
	wp_enqueue_script( 'vsel_datepicker_script', plugins_url( '/js/vsel-datepicker.js' , __FILE__ ), array('jquery', 'jquery-ui-datepicker') );
	wp_enqueue_style( 'vsel_datepicker_style', plugins_url( '/css/vsel-datepicker.min.css',__FILE__ ) );

	// datepicker args
	$vsel_datepicker_args = array(
		'dateFormat' => vsel_datepicker_dateformat( get_option('date_format') )
	);

	// localize script with data for datepicker
	wp_localize_script( 'vsel_datepicker_script', 'objectL10n', $vsel_datepicker_args );
}
add_action( 'admin_enqueue_scripts', 'vsel_enqueue_date_picker' );

// create event post type
function vsel_custom_postype() {
	$disable_archive = get_option('vsel-setting-48');
	if ( $disable_archive == 'yes' ) {
		$has_archive = false;
	} else {
		$has_archive = true;
	}
	$disable_attributes = get_option('vsel-setting-49');
	if ( $disable_attributes == 'yes' ) {
		$page_attributes = '';
	} else {
		$page_attributes = 'page-attributes';
	}
	$disable_menu = get_option('vsel-setting-50');
	if ( $disable_menu == 'yes' ) {
		$show_in_menu = false;
	} else {
		$show_in_menu = true;
	}
	$custom_slug = get_option('vsel-setting-46');
	if ( !empty($custom_slug) ) {
		$event_slug = $custom_slug;
	} else {
		$event_slug = 'event';
	}
	$vsel_labels = array(
		'name' => esc_attr__( 'Events', 'very-simple-event-list' ),
		'singular_name' => esc_attr__( 'Event', 'very-simple-event-list' ),
		'all_items' => esc_attr__( 'All Events', 'very-simple-event-list' ),
		'add_new_item' => esc_attr__( 'Add New Event', 'very-simple-event-list' ),
		'add_new' => esc_attr__( 'New Event', 'very-simple-event-list' ),
		'new_item' => esc_attr__( 'New Event', 'very-simple-event-list' ),
		'edit_item' => esc_attr__( 'Edit Event', 'very-simple-event-list' ),
		'view_item' => esc_attr__( 'View Event', 'very-simple-event-list' ),
		'search_items' => esc_attr__( 'Search Events', 'very-simple-event-list' ),
		'not_found' => esc_attr__( 'No events found', 'very-simple-event-list' ),
		'not_found_in_trash' => esc_attr__( 'No events found in Trash', 'very-simple-event-list' )
	);
	$vsel_args = array(
		'labels' => $vsel_labels,
		'menu_icon' => 'dashicons-calendar-alt',
		'public' => true,
		'can_export' => true,
		'show_in_nav_menus' => $show_in_menu,
		'has_archive' => $has_archive,
		'show_ui' => true,
		'show_in_rest' => true,
		'capability_type' => 'post',
		'taxonomies' => array( 'event_cat' ),
		'rewrite' => array( 'slug' => esc_attr($event_slug) ),
 		'supports' => array( 'title', 'thumbnail', $page_attributes, 'editor' )
	);
	register_post_type( 'event', $vsel_args );
}
add_action( 'init', 'vsel_custom_postype' );

// create event categories
function vsel_taxonomy() {
	$disable_menu = get_option('vsel-setting-50');
	if ( $disable_menu == 'yes' ) {
		$show_in_menu = false;
	} else {
		$show_in_menu = true;
	}
	$custom_slug = get_option('vsel-setting-47');
	if ( !empty($custom_slug) ) {
		$cat_slug = $custom_slug;
	} else {
		$cat_slug = 'event_cat';
	}
	$vsel_cat_args = array(
		'label' => esc_attr__( 'Event Categories', 'very-simple-event-list' ),
		'hierarchical' => true,
		'show_in_nav_menus' => $show_in_menu,
		'show_in_rest' => true,
		'rewrite' => array( 'slug' => esc_attr($cat_slug) )
	);
	register_taxonomy( 'event_cat', 'event', $vsel_cat_args );
}
add_action( 'init', 'vsel_taxonomy' );

// flush rewrite rules on plugin activation
function vsel_activation_hook() {
	vsel_custom_postype();
	vsel_taxonomy();
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'vsel_activation_hook' );

// create metabox
function vsel_metabox() {
	add_meta_box(
		'vsel-event-metabox',
		esc_attr__( 'Event Meta', 'very-simple-event-list' ),
		'vsel_metabox_callback',
		'event',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'vsel_metabox' );

function vsel_metabox_callback( $post ) {
	// generate a nonce field
	wp_nonce_field( 'vsel_meta_box', 'vsel_nonce' );

	// get previously saved meta values (if any)
	$start_date = get_post_meta( $post->ID, 'event-start-date', true );
	$end_date = get_post_meta( $post->ID, 'event-date', true );
	$time = get_post_meta( $post->ID, 'event-time', true );
	$location = get_post_meta( $post->ID, 'event-location', true );
	$link = get_post_meta( $post->ID, 'event-link', true );
	$link_label = get_post_meta( $post->ID, 'event-link-label', true );
	$link_target = get_post_meta( $post->ID, 'event-link-target', true );
	$summary = get_post_meta( $post->ID, 'event-summary', true );

	// get date if saved else set it to current date
	$start_date = !empty( $start_date ) ? $start_date : time();
	$end_date = !empty( $end_date ) ? $end_date : time();

	// set dateformat to match datepicker
	$dateformat = get_option('date_format');
	if ($dateformat == 'j F Y' || $dateformat == 'd/m/Y' || $dateformat == 'd-m-Y') {
		$dateformat = 'd-m-Y';
	} else {
		$dateformat = 'Y-m-d';
	}

	// metabox fields
	?>
	<p><label for="vsel-start-date"><?php esc_attr_e( 'Start date', 'very-simple-event-list' ); ?></label>
	<input class="widefat" id="vsel-start-date" type="text" name="vsel-start-date" required maxlength="10" placeholder="<?php esc_attr_e( 'Use datepicker', 'very-simple-event-list' ); ?>" value="<?php echo date_i18n( $dateformat, esc_attr( $start_date ) ); ?>" /></p>
	<p><label for="vsel-end-date"><?php esc_attr_e( 'End date', 'very-simple-event-list' ); ?></label>
	<input class="widefat" id="vsel-end-date" type="text" name="vsel-end-date" required maxlength="10" placeholder="<?php esc_attr_e( 'Use datepicker', 'very-simple-event-list' ); ?>" value="<?php echo date_i18n( $dateformat, esc_attr( $end_date ) ); ?>" /></p>
	<p><label for="vsel-time"><?php esc_attr_e( 'Time', 'very-simple-event-list' ); ?></label>
	<input class="widefat" id="vsel-time" type="text" name="vsel-time" placeholder="<?php esc_attr_e( 'Example: 16:00 - 18:00', 'very-simple-event-list' ); ?>" value="<?php echo esc_attr( $time ); ?>" /></p>
	<p><label for="vsel-location"><?php esc_attr_e( 'Location', 'very-simple-event-list' ); ?></label>
	<input class="widefat" id="vsel-location" type="text" name="vsel-location" placeholder="<?php esc_attr_e( 'Example: Times Square', 'very-simple-event-list' ); ?>" value="<?php echo esc_attr( $location ); ?>" /></p>
	<p><label for="vsel-link"><?php esc_attr_e( 'Link to more info', 'very-simple-event-list' ); ?></label>
	<input class="widefat" id="vsel-link" type="text" name="vsel-link" placeholder="<?php esc_attr_e( 'Example: www.wordpress.org', 'very-simple-event-list' ); ?>" value="<?php echo esc_url( $link ); ?>" /></p>
	<p><label for="vsel-link-label"><?php esc_attr_e( 'Link label', 'very-simple-event-list' ); ?></label>
	<input class="widefat" id="vsel-link-label" type="text" name="vsel-link-label" placeholder="<?php esc_attr_e( 'Example: More info', 'very-simple-event-list' ); ?>" value="<?php echo esc_attr( $link_label ); ?>" /></p>
	<p><input class="checkbox" id="vsel-link-target" type="checkbox" name="vsel-link-target" value="yes" <?php checked( $link_target, 'yes' ); ?> />
	<label for="vsel-link-target"><?php esc_attr_e('Open link in new window', 'very-simple-event-list'); ?></label></p>
	<p><label for="vsel-summary"><?php esc_attr_e( 'Custom summary', 'very-simple-event-list' ); ?></label>
	<textarea id="vsel-summary" name="vsel-summary" class="large-text" rows="6" placeholder="<?php esc_attr_e( 'This will replace the default summary', 'very-simple-event-list' ); ?>"><?php echo wp_kses_post( $summary); ?></textarea></p>
	<?php
}

// save event
function vsel_save_event_info( $post_id ) {
	// check if nonce is set
	if ( ! isset( $_POST['vsel_nonce'] ) ) {
		return;
	}
	// verify that nonce is valid
	if ( ! wp_verify_nonce( $_POST['vsel_nonce'], 'vsel_meta_box' ) ) {
		return;
	}
	// if this is an autosave, our form has not been submitted, so do nothing
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// check user permission
	if ( ( get_post_type() != 'event' ) || ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
 	// checking values and save fields
	if ( isset( $_POST['vsel-start-date'] ) ) {
		update_post_meta( $post_id, 'event-start-date', sanitize_text_field(strtotime( $_POST['vsel-start-date'] ) ) );
	}
	if ( isset( $_POST['vsel-end-date'] ) ) {
		update_post_meta( $post_id, 'event-date', sanitize_text_field(strtotime( $_POST['vsel-end-date'] ) ) );
	}
	if ( isset( $_POST['vsel-time'] ) ) {
		update_post_meta( $post_id, 'event-time', sanitize_text_field( $_POST['vsel-time'] ) );
	}
	if ( isset( $_POST['vsel-location'] ) ) {
		update_post_meta( $post_id, 'event-location', sanitize_text_field( $_POST['vsel-location'] ) );
	}
	if ( isset( $_POST['vsel-link'] ) ) {
		update_post_meta( $post_id, 'event-link', esc_url_raw( $_POST['vsel-link'] ) );
	}
	if ( isset( $_POST['vsel-link-label'] ) ) {
		update_post_meta( $post_id, 'event-link-label', sanitize_text_field( $_POST['vsel-link-label'] ) );
	}
	if ( isset( $_POST['vsel-link-target'] ) ) {
		update_post_meta( $post_id, 'event-link-target', 'yes' );
	} else {
		update_post_meta( $post_id, 'event-link-target', 'no' );
	}
	if ( isset( $_POST['vsel-summary'] ) ) {
		update_post_meta( $post_id, 'event-summary', wp_kses_post( $_POST['vsel-summary'] ) );
	}
}
add_action( 'save_post', 'vsel_save_event_info' );

// dashboard event columns
function vsel_custom_columns( $defaults ) {
	unset( $defaults['date'] );
	$defaults['start_date_column'] = esc_attr__( 'Start date', 'very-simple-event-list' );
	$defaults['end_date_column'] = esc_attr__( 'End date', 'very-simple-event-list' );
	$defaults['time_column'] = esc_attr__( 'Time', 'very-simple-event-list' );
	$defaults['location_column'] = esc_attr__( 'Location', 'very-simple-event-list' );
	return $defaults;
}
add_filter( 'manage_event_posts_columns', 'vsel_custom_columns', 10 );

function vsel_custom_columns_content( $column_name, $post_id ) {
	if ( 'start_date_column' == $column_name ) {
		$start_date = get_post_meta( $post_id, 'event-start-date', true );
		if(!empty( $start_date ) ) {
			echo date_i18n( get_option('date_format'), $start_date );
		}
	}
	if ( 'end_date_column' == $column_name ) {
		$end_date = get_post_meta( $post_id, 'event-date', true );
		if(!empty( $end_date ) ) {
			echo date_i18n( get_option('date_format'), $end_date );
		}
	}
	if ( 'time_column' == $column_name ) {
		$time = get_post_meta( $post_id, 'event-time', true );
		if(!empty( $time ) ) {
			echo $time;
		}
	}
	if ( 'location_column' == $column_name ) {
		$location = get_post_meta( $post_id, 'event-location', true );
		if(!empty( $location ) ) {
			echo $location;
		}
	}
}
add_action( 'manage_event_posts_custom_column', 'vsel_custom_columns_content', 10, 2 );

// make event date column sortable
function vsel_column_register_sortable( $columns ) {
	$columns['start_date_column'] = 'event-start-date';
	$columns['end_date_column'] = 'event-date';
	return $columns;
}
add_filter( 'manage_edit-event_sortable_columns', 'vsel_column_register_sortable' );

function vsel_start_date_column_orderby( $vars ) {
	if(is_admin()) {
		if ( isset( $vars['orderby'] ) && 'event-start-date' == $vars['orderby'] ) {
			$vars = array_merge( $vars, array(
				'meta_key' => 'event-start-date',
				'orderby' => 'meta_value_num'
			) );
		}
	}
	return $vars;
}
add_filter( 'request', 'vsel_start_date_column_orderby' );

function vsel_date_column_orderby( $vars ) {
	if(is_admin()) {
		if ( isset( $vars['orderby'] ) && 'event-date' == $vars['orderby'] ) {
			$vars = array_merge( $vars, array(
				'meta_key' => 'event-date',
				'orderby' => 'meta_value_num'
			) );
		}
	}
	return $vars;
}
add_filter( 'request', 'vsel_date_column_orderby' );

// add categories to event css class
function vsel_event_cats() {
	global $post;
	$terms = get_the_terms( $post->ID, 'event_cat' );
	if ( $terms && ! is_wp_error( $terms ) ) {
		$cats = array();
		foreach ( $terms as $term ) {
			$cats[] = $term->slug;
		}
		$vsel_cats = join( " ", $cats );
		return ''.$vsel_cats.'';
	} else {
		return '';
	}
}

// add status to event css class
function vsel_event_status() {
	global $post;
	$start = get_post_meta( $post->ID, 'event-start-date' );
	$end = get_post_meta( $post->ID, 'event-date' );
	$today = strtotime( 'today' );
	$start_date = array();
	$end_date = array();
	foreach ( $start as $term ) {
		$start_date = $term;
	}
	foreach ( $end as $term ) {
		$end_date = $term;
	}
	if ( ( $end_date == $today ) || ( ( $start_date <= $today ) && ( $end_date > $today ) ) ) {
		return ' vsel-upcoming vsel-current';
	} elseif ( $end_date > $today ) {
		return ' vsel-upcoming';
	} elseif ( $end_date < $today ) {
		return ' vsel-past';
	} else {
		return '';
	}
}

// add class to pagination
function vsel_prev_posts() {
	return 'class="prev"';
}
add_filter('previous_posts_link_attributes', 'vsel_prev_posts', 10);

function vsel_next_posts() {
	return 'class="next"';
}
add_filter('next_posts_link_attributes', 'vsel_next_posts', 10);

// add settings link
function vsel_action_links ( $links ) {
	$settingslink = array( '<a href="'. admin_url( 'options-general.php?page=vsel' ) .'">'. esc_attr__('Settings', 'very-simple-event-list') .'</a>' );
	return array_merge( $links, $settingslink );
}
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'vsel_action_links' );

// include files
include 'vsel-page-shortcodes.php';
include 'vsel-widget-shortcodes.php';
include 'vsel-widget.php';
include 'vsel-options.php';
include 'vsel-template-support.php';
