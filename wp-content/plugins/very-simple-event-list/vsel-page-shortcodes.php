<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// upcoming events shortcode
function vsel_shortcode( $vsel_atts ) {
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
		global $paged;
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
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
 			'paged' => $paged,
			'meta_query' => $vsel_meta_query
		);
		$vsel_query = new WP_Query( $vsel_query_args );

		if ( $vsel_query->have_posts() ) :
			while( $vsel_query->have_posts() ): $vsel_query->the_post();
				// include event variables
				include 'vsel-page-variables.php';

				// include event template
				include 'vsel-page-template.php';
			endwhile;
			// pagination
			if ( $page_pagination_hide != 'yes' ) :
				$output .= '<div class="vsel-nav">';
					$output .= get_next_posts_link(  __( 'Next &raquo;', 'very-simple-event-list' ), $vsel_query->max_num_pages );
					$output .= get_previous_posts_link( __( '&laquo; Previous', 'very-simple-event-list' ) );
				$output .= '</div>';
			endif;
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
add_shortcode('vsel', 'vsel_shortcode');

// past events shortcode
function vsel_past_events_shortcode( $vsel_atts ) {
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
		global $paged;
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
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
 			'paged' => $paged,
			'meta_query' => $vsel_meta_query
		);
		$vsel_past_query = new WP_Query( $vsel_query_args );

		if ( $vsel_past_query->have_posts() ) :
			while( $vsel_past_query->have_posts() ): $vsel_past_query->the_post();
				// include event variables
				include 'vsel-page-variables.php';

				// include event template
				include 'vsel-page-template.php';
			endwhile;
			// pagination
			if ( $page_pagination_hide != 'yes' ) :
				$output .= '<div class="vsel-nav">';
					$output .= get_next_posts_link(  __( 'Next &raquo;', 'very-simple-event-list' ), $vsel_past_query->max_num_pages );
					$output .= get_previous_posts_link( __( '&laquo; Previous', 'very-simple-event-list' ) );
				$output .= '</div>';
			endif;
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
add_shortcode('vsel-past-events', 'vsel_past_events_shortcode');

// current events shortcode
function vsel_current_events_shortcode( $vsel_atts ) {
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
		global $paged;
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
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
 			'paged' => $paged,
			'meta_query' => $vsel_meta_query
		);
		$vsel_current_query = new WP_Query( $vsel_query_args );

		if ( $vsel_current_query->have_posts() ) :
			while( $vsel_current_query->have_posts() ): $vsel_current_query->the_post();
				// include event variables
				include 'vsel-page-variables.php';

				// include event template
				include 'vsel-page-template.php';
			endwhile;
			// pagination
			if ( $page_pagination_hide != 'yes' ) :
				$output .= '<div class="vsel-nav">';
					$output .= get_next_posts_link(  __( 'Next &raquo;', 'very-simple-event-list' ), $vsel_current_query->max_num_pages );
					$output .= get_previous_posts_link( __( '&laquo; Previous', 'very-simple-event-list' ) );
				$output .= '</div>';
			endif;
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
add_shortcode('vsel-current-events', 'vsel_current_events_shortcode');

// all events shortcode
function vsel_all_events_shortcode( $vsel_atts ) {
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
		global $paged;
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		$vsel_query_args = array(
			'post_type' => 'event',
			'event_cat' => $vsel_atts['event_cat'],
			'post_status' => 'publish',
			'ignore_sticky_posts' => true,
			'meta_key' => 'event-start-date',
			'orderby' => 'meta_value_num',
			'order' => $vsel_atts['order'],
			'posts_per_page' => $vsel_atts['posts_per_page'],
 			'paged' => $paged
		);
		$vsel_all_query = new WP_Query( $vsel_query_args );

		if ( $vsel_all_query->have_posts() ) :
			while( $vsel_all_query->have_posts() ): $vsel_all_query->the_post();
				// include event variables
				include 'vsel-page-variables.php';

				// include event template
				include 'vsel-page-template.php';
			endwhile;
			// pagination
			if ( $page_pagination_hide != 'yes' ) :
				$output .= '<div class="vsel-nav">';
					$output .= get_next_posts_link(  __( 'Next &raquo;', 'very-simple-event-list' ), $vsel_all_query->max_num_pages );
					$output .= get_previous_posts_link( __( '&laquo; Previous', 'very-simple-event-list' ) );
				$output .= '</div>';
			endif;
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
add_shortcode('vsel-all-events', 'vsel_all_events_shortcode');
