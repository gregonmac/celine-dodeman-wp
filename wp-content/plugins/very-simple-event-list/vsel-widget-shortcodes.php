<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Upcoming events shortcode
function vsel_widget_shortcode( $vsel_atts ) {
	$vsel_atts = shortcode_atts( array( 
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'asc',
		'no_events_text' => __('There are no upcoming events.', 'very-simple-event-list')
	), $vsel_atts );

	$output = ""; 
	$output .= '<div id="vsel" class="row">';
		$today = strtotime( 'today' );
		$vsel_meta_query = array( 
			'relation' => 'AND',
			array( 
				'key' => 'event-date', 
				'value' => $today, 
				'compare' => '>=', 
				'type' => 'NUMERIC'
			) 
		); 
		$vsel_query_args = array( 
			'post_type' => 'event', 
			'event_cat' => $vsel_atts['event_cat'],
			'post_status' => 'publish', 
			'ignore_sticky_posts' => true, 
			'meta_key' => 'event-start-date', 
			'orderby' => 'meta_value_num', 
			'order' => $vsel_atts['order'],
			'posts_per_page' => $vsel_atts['posts_per_page'],
			'meta_query' => $vsel_meta_query
		); 
		$vsel_widget_query = new WP_Query( $vsel_query_args );

		if ( $vsel_widget_query->have_posts() ) : 
			while( $vsel_widget_query->have_posts() ): $vsel_widget_query->the_post();
				// get event meta
				$widget_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
				$widget_end_date = get_post_meta( get_the_ID(), 'event-date', true );
				$widget_time = get_post_meta( get_the_ID(), 'event-time', true ); 
				$widget_location = get_post_meta( get_the_ID(), 'event-location', true ); 
				$widget_link = get_post_meta( get_the_ID(), 'event-link', true ); 
				$widget_link_label = get_post_meta( get_the_ID(), 'event-link-label', true ); 
				$widget_link_target = get_post_meta( get_the_ID(), 'event-link-target', true ); 
				$widget_summary = get_post_meta( get_the_ID(), 'event-summary', true ); 

				// include the event list
				include 'vsel-widget-list.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif; 
	$output .= '</div>';

	return $output;
} 
add_shortcode('vsel-widget', 'vsel_widget_shortcode');

// Past events shortcode
function vsel_widget_past_events_shortcode( $vsel_atts ) {
	$vsel_atts = shortcode_atts( array( 
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'asc',
		'no_events_text' => __('There are no past events.', 'very-simple-event-list')
	), $vsel_atts );

	$output = ""; 
	$output .= '<div id="vsel">'; 
		$today = strtotime( 'today' );
		$vsel_meta_query = array( 
			'relation' => 'AND',
			array( 
				'key' => 'event-date', 
				'value' => $today, 
				'compare' => '<', 
				'type' => 'NUMERIC'
			) 
		); 
		$vsel_query_args = array( 
			'post_type' => 'event', 
			'event_cat' => $vsel_atts['event_cat'],
			'post_status' => 'publish', 
			'ignore_sticky_posts' => true, 
			'meta_key' => 'event-start-date', 
			'orderby' => 'meta_value_num', 
			'order' => $vsel_atts['order'],
			'posts_per_page' => $vsel_atts['posts_per_page'],
			'meta_query' => $vsel_meta_query
		); 
		$vsel_widget_past_query = new WP_Query( $vsel_query_args );

		if ( $vsel_widget_past_query->have_posts() ) : 
			while( $vsel_widget_past_query->have_posts() ): $vsel_widget_past_query->the_post(); 
				// get event meta
				$widget_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
				$widget_end_date = get_post_meta( get_the_ID(), 'event-date', true );
				$widget_time = get_post_meta( get_the_ID(), 'event-time', true ); 
				$widget_location = get_post_meta( get_the_ID(), 'event-location', true ); 
				$widget_link = get_post_meta( get_the_ID(), 'event-link', true ); 
				$widget_link_label = get_post_meta( get_the_ID(), 'event-link-label', true ); 
				$widget_link_target = get_post_meta( get_the_ID(), 'event-link-target', true ); 
				$widget_summary = get_post_meta( get_the_ID(), 'event-summary', true ); 

				// include the event list
				include 'vsel-widget-list.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif; 
	$output .= '</div>';

	return $output;
}
add_shortcode('vsel-widget-past-events', 'vsel_widget_past_events_shortcode');

// Current events shortcode
function vsel_widget_current_events_shortcode( $vsel_atts ) {
	$vsel_atts = shortcode_atts( array( 
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'asc',
		'no_events_text' => __('There are no current events.', 'very-simple-event-list')
	), $vsel_atts );

	$output = ""; 
	$output .= '<div id="vsel">'; 
		$today = strtotime( 'today' );
		$vsel_meta_query = array( 
			'relation' => 'OR',
			array( 
				'key' => 'event-date', 
				'value' => $today, 
				'compare' => '==', 
				'type' => 'NUMERIC'
			), 
			array( 
				'relation' => 'AND', 
				array( 
					'key' => 'event-start-date', 
					'value' => $today, 
					'compare' => '<=', 
					'type' => 'NUMERIC'
				), 
				array( 
					'key' => 'event-date', 
					'value' => $today, 
					'compare' => '>',
					'type' => 'NUMERIC'
				) 
			) 
		); 
		$vsel_query_args = array( 
			'post_type' => 'event', 
			'event_cat' => $vsel_atts['event_cat'],
			'post_status' => 'publish', 
			'ignore_sticky_posts' => true, 
			'meta_key' => 'event-start-date', 
			'orderby' => 'meta_value_num', 
			'order' => $vsel_atts['order'],
			'posts_per_page' => $vsel_atts['posts_per_page'],
			'meta_query' => $vsel_meta_query
		); 
		$vsel_widget_current_query = new WP_Query( $vsel_query_args );

		if ( $vsel_widget_current_query->have_posts() ) : 
			while( $vsel_widget_current_query->have_posts() ): $vsel_widget_current_query->the_post(); 
				// get event meta
				$widget_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
				$widget_end_date = get_post_meta( get_the_ID(), 'event-date', true );
				$widget_time = get_post_meta( get_the_ID(), 'event-time', true ); 
				$widget_location = get_post_meta( get_the_ID(), 'event-location', true ); 
				$widget_link = get_post_meta( get_the_ID(), 'event-link', true ); 
				$widget_link_label = get_post_meta( get_the_ID(), 'event-link-label', true ); 
				$widget_link_target = get_post_meta( get_the_ID(), 'event-link-target', true ); 
				$widget_summary = get_post_meta( get_the_ID(), 'event-summary', true ); 

				// include the event list
				include 'vsel-widget-list.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif; 
	$output .= '</div>';

	return $output;
}
add_shortcode('vsel-widget-current-events', 'vsel_widget_current_events_shortcode');

// All events shortcode
function vsel_widget_all_events_shortcode( $vsel_atts ) {
	$vsel_atts = shortcode_atts( array( 
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'asc',
		'no_events_text' => __('There are no events.', 'very-simple-event-list')
	), $vsel_atts );

	$output = ""; 
	$output .= '<div id="vsel">'; 
		$vsel_query_args = array( 
			'post_type' => 'event', 
			'event_cat' => $vsel_atts['event_cat'],
			'post_status' => 'publish', 
			'ignore_sticky_posts' => true, 
			'meta_key' => 'event-start-date', 
			'orderby' => 'meta_value_num', 
			'order' => $vsel_atts['order'],
			'posts_per_page' => $vsel_atts['posts_per_page']
		); 
		$vsel_widget_all_query = new WP_Query( $vsel_query_args );

		if ( $vsel_widget_all_query->have_posts() ) : 
			while( $vsel_widget_all_query->have_posts() ): $vsel_widget_all_query->the_post(); 
				// get event meta
				$widget_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
				$widget_end_date = get_post_meta( get_the_ID(), 'event-date', true );
				$widget_time = get_post_meta( get_the_ID(), 'event-time', true ); 
				$widget_location = get_post_meta( get_the_ID(), 'event-location', true ); 
				$widget_link = get_post_meta( get_the_ID(), 'event-link', true ); 
				$widget_link_label = get_post_meta( get_the_ID(), 'event-link-label', true ); 
				$widget_link_target = get_post_meta( get_the_ID(), 'event-link-target', true ); 
				$widget_summary = get_post_meta( get_the_ID(), 'event-summary', true ); 

				// include the event list
				include 'vsel-widget-list.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif; 
	$output .= '</div>';

	return $output;
}
add_shortcode('vsel-widget-all-events', 'vsel_widget_all_events_shortcode');
