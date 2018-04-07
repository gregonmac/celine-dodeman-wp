<?php
class slideshowck_widget extends WP_Widget {

	private $ckfields;

	function __construct() {
		$widget_ops = array(
			'classname' => 'slideshow-ck',
			'description' => __('Display a Slideshow CK in your website', 'slideshow-ck')
		);
		parent::__construct( 'slideshowck_widget', 'Slideshow CK', $widget_ops );
	}
	
	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form($instance) {
		$defaults = array( 'slideshowck_id' => '' );
		$instance = wp_parse_args( (array) $instance, $defaults );
		$slideshowck_id = $instance['slideshowck_id'];
		$posts_slideshowck_id = get_posts( array(
			'numberposts' => -1, // we want to retrieve all of the posts
			'post_type' => 'slideshowck'
		) );
		$options_slideshowck_id = array();
		?>
		<p>
			<label for="<?php echo $this->get_field_name('slideshowck_id') ?>"><?php _e('Select the slideshow to load', 'slideshow-ck') ?> :</label>
			<br />
			<select name="<?php echo $this->get_field_name('slideshowck_id') ?>" value="0">
				<option value="0">- Select -</option>
				<?php foreach ( $posts_slideshowck_id as $slideshow ) { ?>
					<option value="<?php echo (int) $slideshow->ID ?>" <?php selected( esc_attr( $slideshowck_id ), $slideshow->ID ); ?>><?php echo $slideshow->post_name ?></option>
				<?php } ?>>
			</select>
			<?php
			//echo $this->fields->get('select', $this->get_field_name('slideshowck_id'), esc_attr( $slideshowck_id ), '', $options_slideshowck_id);
			?>
		</p>
		<?php
	}
	
	/** Update a particular instance.
	 *
	 * This function should check that $new_instance is set correctly.
	 * The newly calculated value of $instance should be returned.
	 * If "false" is returned, the instance won't be saved/updated.
	 *
	 * @param array $new_instance New settings for this instance as input by the user via form()
	 * @param array $old_instance Old settings for this instance
	 * @return array Settings to save or bool false to cancel saving
	 */
	public function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['slideshowck_id'] = strip_tags( $new_instance['slideshowck_id'] );

		return $instance;
	}
	
	/** Echo the widget content.
	 *
	 * Subclasses should over-ride this function to generate their widget code.
	 *
	 * @param array $args Display arguments including before_title, after_title, before_widget, and after_widget.
	 * @param array $instance The settings for the particular instance of the widget
	 */
	public function widget($args, $instance) {
		if (! $instance) {
			echo '<p style="color:red">Please select a slideshow to show in the widget options</p>';
			return;
		}
		$title = isset($instance['title']) ? apply_filters( 'widget_title', $instance['title'] ) : '';
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
	 
		// This is where you run the code and display the output
		do_slideshowck($instance['slideshowck_id']);
		echo $args['after_widget'];
	}
}