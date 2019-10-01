<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class vsel_widget extends WP_Widget {
	// constructor
	public function __construct() {
		$widget_ops = array( 'classname' => 'vsel-widget', 'description' => esc_attr__('Display your events in a widget.', 'very-simple-event-list') );
		parent::__construct( 'vsel_widget', esc_attr__('Very Simple Event List', 'very-simple-event-list'), $widget_ops );
	}

	// set widget in dashboard
	function form( $instance ) {
		$instance = wp_parse_args( $instance, array(
			'vsel_title' => '',
			'vsel_text' => '',
			'vsel_shortcode' => '',
			'vsel_attributes' => '',
			'vsel_all_events_link' => '',
			'vsel_all_events_label' => ''
		));
		$vsel_title = !empty( $instance['vsel_title'] ) ? $instance['vsel_title'] : __('Very Simple Event List', 'very-simple-event-list');
		$vsel_text = $instance['vsel_text'];
		$vsel_shortcode = $instance['vsel_shortcode'];
		$vsel_attributes = $instance['vsel_attributes'];
		$vsel_all_events_link = $instance['vsel_all_events_link'];
		$vsel_all_events_label = $instance['vsel_all_events_label'];

		// widget input fields
		?>
		<p>
		<label for="<?php echo $this->get_field_id( 'vsel_title' ); ?>"><?php esc_attr_e('Title', 'very-simple-event-list'); ?>:</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'vsel_title' ); ?>" name="<?php echo $this->get_field_name( 'vsel_title' ); ?>" type="text" value="<?php echo esc_attr( $vsel_title ); ?>">
 		</p>
		<p>
		<label for="<?php echo $this->get_field_id('vsel_text'); ?>"><?php esc_attr_e('Text above event list', 'very-simple-event-list'); ?>:</label>
		<textarea class="widefat monospace" rows="6" cols="20" id="<?php echo $this->get_field_id('vsel_text'); ?>" name="<?php echo $this->get_field_name('vsel_text'); ?>"><?php echo wp_kses_post( $vsel_text ); ?></textarea>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'vsel_shortcode' ); ?>"><?php esc_attr_e( 'List', 'very-simple-event-list' ); ?>:</label>
		<select class="widefat" id="<?php echo $this->get_field_id( 'vsel_shortcode' ); ?>" name="<?php echo $this->get_field_name( 'vsel_shortcode' ); ?>">
			<option value='upcoming'<?php echo ($vsel_shortcode == 'upcoming')?'selected':''; ?>><?php esc_attr_e( 'Upcoming events', 'very-simple-event-list' ); ?></option>
			<option value='past'<?php echo ($vsel_shortcode == 'past')?'selected':''; ?>><?php esc_attr_e( 'Past events', 'very-simple-event-list' ); ?></option>
			<option value='current'<?php echo ($vsel_shortcode == 'current')?'selected':''; ?>><?php esc_attr_e( 'Current events', 'very-simple-event-list' ); ?></option>
			<option value='all'<?php echo ($vsel_shortcode == 'all')?'selected':''; ?>><?php esc_attr_e( 'All events', 'very-simple-event-list' ); ?></option>
		</select>
		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'vsel_attributes' ); ?>"><?php esc_attr_e('Attributes', 'very-simple-event-list'); ?>:</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'vsel_attributes' ); ?>" name="<?php echo $this->get_field_name( 'vsel_attributes' ); ?>" type="text" placeholder="<?php esc_attr_e( 'Example: posts_per_page=&quot;2&quot;', 'very-simple-event-list' ); ?>" value="<?php echo esc_attr( $vsel_attributes ); ?>">
 		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'vsel_all_events_link' ); ?>"><?php esc_attr_e('Link to all events', 'very-simple-event-list'); ?>:</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'vsel_all_events_link' ); ?>" name="<?php echo $this->get_field_name( 'vsel_all_events_link' ); ?>" type="text" placeholder="<?php esc_attr_e( 'Example: www.your-domain.com/events', 'very-simple-event-list' ); ?>" value="<?php echo esc_url( $vsel_all_events_link ); ?>">
 		</p>
		<p>
		<label for="<?php echo $this->get_field_id( 'vsel_all_events_label' ); ?>"><?php esc_attr_e('Link label', 'very-simple-event-list'); ?>:</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'vsel_all_events_label' ); ?>" name="<?php echo $this->get_field_name( 'vsel_all_events_label' ); ?>" type="text" placeholder="<?php esc_attr_e( 'Example: All events', 'very-simple-event-list' ); ?>" value="<?php echo esc_attr( $vsel_all_events_label ); ?>">
 		</p>
		<?php $link_label = __( 'click here', 'very-simple-event-list' ); ?>
		<?php $link_wp = '<a href="https://wordpress.org/plugins/very-simple-event-list" target="_blank">'.$link_label.'</a>'; ?>
		<?php $link_settings = '<a href="'.admin_url( 'options-general.php?page=vsel' ).'">'.$link_label.'</a>'; ?>
		<p><?php printf( esc_attr__( 'For info, available attributes and support %s.', 'very-simple-event-list' ), $link_wp ); ?></p>
		<p><?php printf( esc_attr__( 'For plugin settings %s.', 'very-simple-event-list' ), $link_settings ); ?></p>
		<?php
	}

	// update widget
	function update( $new_instance, $old_instance ) {
		$instance = array();

		// sanitize input
		$instance['vsel_title'] = sanitize_text_field( $new_instance['vsel_title'] );
		$instance['vsel_text'] = wp_kses_post( $new_instance['vsel_text'] );
		$instance['vsel_shortcode'] = sanitize_text_field( $new_instance['vsel_shortcode'] );
		$instance['vsel_attributes'] = sanitize_text_field( $new_instance['vsel_attributes'] );
		$instance['vsel_all_events_link'] = esc_url_raw( $new_instance['vsel_all_events_link'] );
		$instance['vsel_all_events_label'] = sanitize_text_field( $new_instance['vsel_all_events_label'] );

		return $instance;
	}

	// display widget with event list in frontend
	function widget( $args, $instance ) {
		if ( empty( $instance['vsel_all_events_label'] ) ) {
			$instance['vsel_all_events_label'] = __( 'All events', 'very-simple-event-list' );
		}

		echo $args['before_widget'];

		if ( !empty( $instance['vsel_title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', esc_attr($instance['vsel_title']) ). $args['after_title'];
		}

		if ( !empty( $instance['vsel_text'] ) ) {
			echo '<div class="vsel-widget-text">'.wpautop( wp_kses_post($instance['vsel_text']).'</div>');
		}

		if ( $instance['vsel_shortcode'] == 'past' ) {
			$content = '[vsel-widget-past-events ';
		} else if ( $instance['vsel_shortcode'] == 'current' ) {
			$content = '[vsel-widget-current-events ';
		} else if ( $instance['vsel_shortcode'] == 'all' ) {
			$content = '[vsel-widget-all-events ';
		} else {
			$content = '[vsel-widget ';
		}
		if ( !empty( $instance['vsel_attributes'] ) ) {
			$content .= wp_strip_all_tags($instance['vsel_attributes']);
		}
		$content .= ']';
		echo do_shortcode( $content );

		if ( !empty( $instance['vsel_all_events_link'] ) ) {
			echo '<div class="vsel-widget-link">' . sprintf( '<a href="%1$s">%2$s</a>', esc_url($instance['vsel_all_events_link']), esc_attr($instance['vsel_all_events_label']) ) . '</div>';
		}

		echo $args['after_widget'];
	}
}
