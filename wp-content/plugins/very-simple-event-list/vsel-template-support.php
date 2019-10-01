<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// single event
function vsel_single_content( $content ) {
	// include event variables
	include 'vsel-page-variables.php';
	// initialize output
	$output = '';
	// if single event and if template is activated
	if ( is_singular('event') && in_the_loop() && ( $page_disable_single_template != 'yes' ) ) {
		// event container
		$output .= '<div class="vsel-content">';
			// meta section
			$output .= $page_meta_section_start;
				// date
				if ( empty($page_start_date) || empty($page_end_date) || ($page_start_date > $page_end_date) ) {
					$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
					$output .= esc_attr__( 'Error: please reset date.', 'very-simple-event-list' );
					$output .= '</p>';
				} elseif ($page_end_date > $page_start_date) {
					if ($page_date_combine == "yes") {
						$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
						$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_start_date) ).'</span>' );
						$output .= $sep;
						$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
						$output .= '</p>';
					} else {
						$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
						$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_start_date) ).'</span>' );
						$output .= '</p>';
						$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
						$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
						$output .= '</p>';
					}
				} elseif ($page_end_date == $page_start_date) {
					$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
					$output .= sprintf(esc_attr($page_date_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
					$output .= '</p>';
				}
				// time
				if(!empty($page_time)) {
					$output .= '<p class="vsel-meta-time">';
					$output .= sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' );
					$output .= '</p>';
				}
				// location
				if(!empty($page_location)) {
					$output .= '<p class="vsel-meta-location">';
					$output .= sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' );
					$output .= '</p>';
				}
				// include acf fields
				if( class_exists('acf') ) {
					include 'vsel-acf.php';
				}
				// more info link
				if(!empty($page_link)) {
					$output .= '<p class="vsel-meta-link">';
					$output .= sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) );
					$output .= '</p>';
				}
				// categories
				$cats_raw = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' ) );
				$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
				if( has_term( '', 'event_cat', get_the_ID() ) ) {
					if ($page_link_cat != 'yes') {
						$output .= '<p class="vsel-meta-cats">'.$cats_raw.'</p>';
					} else {
						$output .= '<p class="vsel-meta-cats">'.$cats.'</p>';
					}
				}
			$output .= $page_meta_section_end;
			// image info section
			$output .= $page_image_info_section_start;
				// info
				$output .= $content;
			$output .= $page_image_info_section_end;
		$output .= '</div>';
	// return native content if template is not activated
  	} else {
		$output .= $content;
	}
	// return output
	return $output;
}
add_filter( 'the_content', 'vsel_single_content' );

// category, post type and search results page
function vsel_archive_content( $content ) {
	// set global
	global $post_type;
	// include event variables
	include 'vsel-page-variables.php';
	// initialize output
	$output = '';
	// if post content is no summary and if template is activated
	if ( ( is_tax('event_cat') && in_the_loop() && ( $page_disable_category_template != 'yes' ) ) || ( is_post_type_archive('event') && ! is_search() && in_the_loop() && ( $page_disable_post_type_template != 'yes' ) ) || ( ( $post_type == 'event' ) && is_search() && in_the_loop() && ( $page_disable_search_template != 'yes' ) ) ) {
		// get event content
		$vsel_event_data = get_post( get_the_ID() );
		$vsel_event_content = wpautop( wp_kses_post( $vsel_event_data->post_content ) );
		// event container
		$output .= '<div class="vsel-content">';
			// meta section
			$output .= $page_meta_section_start;
				// date
				if ( ($page_date_hide != 'yes') ) {
					if ( empty($page_start_date) || empty($page_end_date) || ($page_start_date > $page_end_date) ) {
						$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
						$output .= esc_attr__( 'Error: please reset date.', 'very-simple-event-list' );
						$output .= '</p>';
					} elseif ($page_end_date > $page_start_date) {
						if ($page_date_combine == "yes") {
							$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
							$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_start_date) ).'</span>' );
							$output .= $sep;
							$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
							$output .= '</p>';
						} else {
							$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
							$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_start_date) ).'</span>' );
							$output .= '</p>';
							$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
							$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
							$output .= '</p>';
						}
					} elseif ($page_end_date == $page_start_date) {
						$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
						$output .= sprintf(esc_attr($page_date_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
						$output .= '</p>';
					}
				}
				// time
				if ( ($page_time_hide != 'yes') ) {
					if(!empty($page_time)) {
						$output .= '<p class="vsel-meta-time">';
						$output .= sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' );
						$output .= '</p>';
					}
				}
				// location
				if ( ($page_location_hide != 'yes') ) {
					if(!empty($page_location)) {
						$output .= '<p class="vsel-meta-location">';
						$output .= sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' );
						$output .= '</p>';
					}
				}
				// include acf fields
				if( class_exists('acf') && ($page_acf_hide != 'yes') ) {
					include 'vsel-acf.php';
				}
				// more info link
				if ( ($page_link_hide != 'yes') ) {
					if(!empty($page_link)) {
						$output .= '<p class="vsel-meta-link">';
						$output .= sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) );
						$output .= '</p>';
					}
				}
				// categories
				if ( ($page_cats_hide != 'yes') ) {
					$cats_raw = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' ) );
					$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
					if( has_term( '', 'event_cat', get_the_ID() ) ) {
						if ($page_link_cat != 'yes') {
							$output .= '<p class="vsel-meta-cats">'.$cats_raw.'</p>';
						} else {
							$output .= '<p class="vsel-meta-cats">'.$cats.'</p>';
						}
					}
				}
			$output .= $page_meta_section_end;
			// image info section
			$output .= $page_image_info_section_start;
				// featured image
				if ( ($page_image_hide != 'yes') ) {
					if ( has_post_thumbnail() ) {
						$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $page_image_source );
						$image_title = get_the_title( get_post_thumbnail_id( get_the_ID() ) );
						if ($page_link_image != 'yes') {
							$output .= '<img class ="'.$page_img_class.'" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$image_title.'" />';
						} else {
							$output .=  '<a href="'. get_permalink() .'"><img class ="'.$page_img_class.'" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$image_title.'" /></a>';
						}
					}
				}
				// info
				if ( $page_info_hide != 'yes') {
					$output .= '<div class="vsel-info">';
					$output .= $vsel_event_content;
					$output .= '</div>';
				}
			$output .= $page_image_info_section_end;
		$output .= '</div>';
	// return native content if template is not activated
  	} else {
		$output .= $content;
	}
	// return output
	return $output;
}
add_filter( 'the_content', 'vsel_archive_content' );

function vsel_archive_excerpt( $excerpt ) {
	// set global
	global $post_type;
	// include event variables
	include 'vsel-page-variables.php';
	// initialize output
	$output = '';
	// if post content is summary and if template is activated
	if ( ( is_tax('event_cat') && in_the_loop() && ( $page_disable_category_template != 'yes' ) ) || ( is_post_type_archive('event') && ! is_search() && in_the_loop() && ( $page_disable_post_type_template != 'yes' ) ) || ( ( $post_type == 'event' ) && is_search() && in_the_loop() && ( $page_disable_search_template != 'yes' ) ) ) {
		// get event summary and content to create excerpt
		$vsel_event_data = get_post( get_the_ID() );
		$vsel_event_content = $vsel_event_data->post_content;
		if ( !empty( $page_summary ) ) {
			$vsel_event_summary = wpautop( wp_kses_post( $page_summary ) );
		} else {
			$vsel_event_summary = wp_trim_words( $vsel_event_content, 55, ' [&hellip;] ');
		}
		// event container
		$output .= '<div class="vsel-content">';
			// meta section
			$output .= $page_meta_section_start;
				// date
				if ( ($page_date_hide != 'yes') ) {
					if ( empty($page_start_date) || empty($page_end_date) || ($page_start_date > $page_end_date) ) {
						$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
						$output .= esc_attr__( 'Error: please reset date.', 'very-simple-event-list' );
						$output .= '</p>';
					} elseif ($page_end_date > $page_start_date) {
						if ($page_date_combine == "yes") {
							$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
							$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_start_date) ).'</span>' );
							$output .= $sep;
							$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
							$output .= '</p>';
						} else {
							$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
							$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_start_date) ).'</span>' );
							$output .= '</p>';
							$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
							$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
							$output .= '</p>';
						}
					} elseif ($page_end_date == $page_start_date) {
						$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
						$output .= sprintf(esc_attr($page_date_label), '<span>'.date_i18n( esc_attr($date_format), esc_attr($page_end_date) ).'</span>' );
						$output .= '</p>';
					}
				}
				// time
				if ( ($page_time_hide != 'yes') ) {
					if(!empty($page_time)) {
						$output .= '<p class="vsel-meta-time">';
						$output .= sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' );
						$output .= '</p>';
					}
				}
				// location
				if ( ($page_location_hide != 'yes') ) {
					if(!empty($page_location)) {
						$output .= '<p class="vsel-meta-location">';
						$output .= sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' );
						$output .= '</p>';
					}
				}
				// include acf fields
				if( class_exists('acf') && ($page_acf_hide != 'yes') ) {
					include 'vsel-acf.php';
				}
				// more info link
				if ( ($page_link_hide != 'yes') ) {
					if(!empty($page_link)) {
						$output .= '<p class="vsel-meta-link">';
						$output .= sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) );
						$output .= '</p>';
					}
				}
				// categories
				if ( ($page_cats_hide != 'yes') ) {
					$cats_raw = wp_strip_all_tags( get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' ) );
					$cats = get_the_term_list( get_the_ID(), 'event_cat', '<span>', ' | ', '</span>' );
					if( has_term( '', 'event_cat', get_the_ID() ) ) {
						if ($page_link_cat != 'yes') {
							$output .= '<p class="vsel-meta-cats">'.$cats_raw.'</p>';
						} else {
							$output .= '<p class="vsel-meta-cats">'.$cats.'</p>';
						}
					}
				}
			$output .= $page_meta_section_end;
			// image info section
			$output .= $page_image_info_section_start;
				// featured image
				if ( ($page_image_hide != 'yes') ) {
					if ( has_post_thumbnail() ) {
						$image_attributes = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), $page_image_source );
						$image_title = get_the_title( get_post_thumbnail_id( get_the_ID() ) );
						if ($page_link_image != 'yes') {
							$output .= '<img class ="'.$page_img_class.'" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$image_title.'" />';
						} else {
							$output .=  '<a href="'. get_permalink() .'"><img class ="'.$page_img_class.'" src="'.$image_attributes[0].'" width="'.$image_attributes[1].'" height="'.$image_attributes[2].'" alt="'.$image_title.'" /></a>';
						}
					}
				}
				// info
				if ( $page_info_hide != 'yes') {
					$output .= '<div class="vsel-info">';
					$output .= $vsel_event_summary;
					$output .= '</div>';
				}
			$output .= $page_image_info_section_end;
		$output .= '</div>';
	// return native excerpt if template is not activated
  	} else {
		$output .= $excerpt;
	}
	// return output
	return $output;
}
add_filter( 'the_excerpt', 'vsel_archive_excerpt' );
