<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// single event
function vsel_single_content( $content ) { 
	if ( is_singular('event') && in_the_loop() ) { 
		global $wp_query; 
		$postid = $wp_query->post->ID;

		// get event meta
		$single_start_date = get_post_meta( $postid, 'event-start-date', true );
		$single_end_date = get_post_meta( $postid, 'event-date', true );
		$single_time = get_post_meta( $postid, 'event-time', true ); 
		$single_location = get_post_meta( $postid, 'event-location', true );
		$single_link = get_post_meta( $postid, 'event-link', true ); 
		$single_link_label = get_post_meta( $postid, 'event-link-label', true ); 
		$single_link_target = get_post_meta( $postid, 'event-link-target', true ); 

		// get labels from settingspage
		$single_date_label = esc_attr(get_option('vsel-setting-16'));
		$single_start_label = esc_attr(get_option('vsel-setting-17'));
		$single_end_label = esc_attr(get_option('vsel-setting-18'));
		$single_time_label = esc_attr(get_option('vsel-setting-19'));
		$single_location_label = esc_attr(get_option('vsel-setting-20'));

		// get setting to combine dates
		$single_date_combine = esc_attr(get_option('vsel-setting-15'));

		// show default label if empty setting
		if (empty($single_date_label)) {
			$single_date_label = esc_attr__( 'Date: %s', 'very-simple-event-list' );
		}
		if (empty($single_start_label)) {
			$single_start_label = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
		}
		if (empty($single_end_label)) {
			$single_end_label = esc_attr__( 'End date: %s', 'very-simple-event-list' );
		}
		if (empty($single_time_label)) {
			$single_time_label = esc_attr__( 'Time: %s', 'very-simple-event-list' );
		}
		if (empty($single_location_label)) {
			$single_location_label = esc_attr__( 'Location: %s', 'very-simple-event-list' );
		}

		// show default label if empty meta
		if (empty($single_link_label)) {
			$single_link_label = esc_attr__( 'More info', 'very-simple-event-list' );
		}
 
		// set link target
		if ($single_link_target == 'yes') {
			$single_link_target = ' target="_blank"';
		} else {
			$single_link_target = ' target="_self"';
		}

		// set variables
		$date = esc_attr('');
		$startdate = esc_attr('');
		$sep = esc_attr('');
		$enddate = esc_attr('');
		$time = esc_attr('');
		$location = esc_attr('');
		$link = esc_attr('');

		// error in case of wrong date or no start date (no start date in version 4.0 and older)
		if ( empty($single_start_date) || ($single_start_date > $single_end_date) ) {
			$date = '<p class="vsel-meta-date vsel-meta-error-date">' . esc_attr__( 'Error: please reset date', 'very-simple-event-list' ) . '</p>'; 
		}

		if ($single_end_date > $single_start_date) {
			if ($single_date_combine == "yes") {
				$startdate = '<p class="vsel-meta-date vsel-meta-combined-date">' . sprintf(esc_attr($single_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($single_start_date) ).'</span>' ); 
				$sep = ' - '; 
				$enddate = sprintf(esc_attr($single_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($single_end_date) ).'</span>' ) . '</p>'; 

			} else { 
				$startdate = '<p class="vsel-meta-date vsel-meta-start-date">' . sprintf(esc_attr($single_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($single_start_date) ).'</span>' ) . '</p>'; 
				$enddate = '<p class="vsel-meta-date vsel-meta-end-date">'. sprintf(esc_attr($single_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($single_end_date) ).'</span>' ) . '</p>'; 
			}
		} elseif ($single_end_date == $single_start_date) {
			$date = '<p class="vsel-meta-date vsel-meta-single-date">' . sprintf(esc_attr($single_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($single_end_date) ).'</span>' ) . '</p>'; 
		}
		if(!empty($single_time)){
			$time = '<p class="vsel-meta-time">' . sprintf(esc_attr($single_time_label), '<span>'.esc_attr($single_time).'</span>' ) . '</p>';
		} 
		if(!empty($single_location)){
			$location = '<p class="vsel-meta-location">' . sprintf(esc_attr($single_location_label), '<span>'.esc_attr($single_location).'</span>' ) . '</p>';
		}
		if(!empty($single_link)){
			$link = '<p class="vsel-meta-link">' . sprintf( '<a href="%1$s"'. $single_link_target .'>%2$s</a>', esc_url($single_link), esc_attr($single_link_label) ) . '</p>';
		}
		$content = '<div id="vsel">' . '<div class="vsel-meta">' . $date . $startdate . $sep . $enddate . $time . $location . $link . '</div>' . '<div class="vsel-image-info">' . $content . '</div>' . '</div>';   
  	} 
	return $content; 
}
add_filter( 'the_content', 'vsel_single_content' );
