<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// upcoming events shortcode
function vsel_widget_shortcode( $vsel_atts ) {
	// shortcode attributes
	$vsel_atts = shortcode_atts(array(
		'class' => 'vsel-container',
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'asc',
		'no_events_text' => __('There are no upcoming events.', 'very-simple-event-list')
	), $vsel_atts );

	// initialize output
	$output = '';
	// main container
	$output .= '<div id="vsel" class="'.$vsel_atts['class'].'">';
		// query
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
				// include event variables
				include 'vsel-widget-variables.php';

				// include event template
				include 'vsel-widget-template.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="vsel-no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif;
	$output .= '</div>';

	// return output
	return $output;
}
add_shortcode('vsel-widget', 'vsel_widget_shortcode');

// past events shortcode
function vsel_widget_past_events_shortcode( $vsel_atts ) {
	// shortcode attributes
	$vsel_atts = shortcode_atts(array(
		'class' => 'vsel-container',
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'desc',
		'no_events_text' => __('There are no past events.', 'very-simple-event-list')
	), $vsel_atts );

	// initialize output
	$output = '';
	// main container
	$output .= '<div id="vsel" class="'.$vsel_atts['class'].'">';
		// query
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
				// include event variables
				include 'vsel-widget-variables.php';

				// include event template
				include 'vsel-widget-template.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="vsel-no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif;
	$output .= '</div>';

	// return output
	return $output;
}
add_shortcode('vsel-widget-past-events', 'vsel_widget_past_events_shortcode');

// current events shortcode
function vsel_widget_current_events_shortcode( $vsel_atts ) {
	// shortcode attributes
	$vsel_atts = shortcode_atts(array(
		'class' => 'vsel-container',
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'asc',
		'no_events_text' => __('There are no current events.', 'very-simple-event-list')
	), $vsel_atts );

	// initialize output
	$output = '';
	// main container
	$output .= '<div id="vsel" class="'.$vsel_atts['class'].'">';
		// query
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
				// include event variables
				include 'vsel-widget-variables.php';

				// include event template
				include 'vsel-widget-template.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="vsel-no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif;
	$output .= '</div>';

	// return output
	return $output;
}
add_shortcode('vsel-widget-current-events', 'vsel_widget_current_events_shortcode');

// all events shortcode
function vsel_widget_all_events_shortcode( $vsel_atts ) {
	// shortcode attributes
	$vsel_atts = shortcode_atts(array(
		'class' => 'vsel-container',
		'event_cat' => '',
		'posts_per_page' => '',
		'order' => 'desc',
		'no_events_text' => __('There are no events.', 'very-simple-event-list')
	), $vsel_atts );

	// initialize output
	$output = '';
	// main container
	$output .= '<div id="vsel" class="'.$vsel_atts['class'].'">';
		// query
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
				// include event variables
				include 'vsel-widget-variables.php';
				
				// include event template
				include 'vsel-widget-template.php';
			endwhile;
			// reset post data
			wp_reset_postdata();
		else:
			// if no events
			$output .= '<p class="vsel-no-events">';
			$output .= esc_attr($vsel_atts['no_events_text']);
			$output .= '</p>';
		endif;
	$output .= '</div>';

	// return output
	return $output;
}
add_shortcode('vsel-widget-all-events', 'vsel_widget_all_events_shortcode');
