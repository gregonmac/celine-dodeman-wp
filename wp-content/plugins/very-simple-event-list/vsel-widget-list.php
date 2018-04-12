<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get labels from settingspage
$widget_date_label = esc_attr(get_option('vsel-setting-22'));
$widget_start_label = esc_attr(get_option('vsel-setting-23'));
$widget_end_label = esc_attr(get_option('vsel-setting-24'));
$widget_time_label = esc_attr(get_option('vsel-setting-25'));
$widget_location_label = esc_attr(get_option('vsel-setting-26'));

// get setting to combine dates
$widget_date_combine = esc_attr(get_option('vsel-setting-21'));

// get setting to show excerpt
$widget_excerpt = esc_attr(get_option('vsel-setting-1'));

// get settings to link title and image to single event
$widget_link_title = esc_attr(get_option('vsel-setting-14'));
$widget_link_image = esc_attr(get_option('vsel-setting-31'));

// get setting to set image size
$widget_image_size = esc_attr(get_option('vsel-setting-32'));

// get settings to hide elements
$widget_date_hide = esc_attr(get_option('vsel-setting-2'));
$widget_time_hide = esc_attr(get_option('vsel-setting-3'));
$widget_location_hide = esc_attr(get_option('vsel-setting-4'));
$widget_image_hide = esc_attr(get_option('vsel-setting-5'));
$widget_info_hide = esc_attr(get_option('vsel-setting-7'));
$widget_link_hide = esc_attr(get_option('vsel-setting-6'));

// show default label if empty setting
if (empty($widget_date_label)) {
	$widget_date_label = esc_attr__( 'Date: %s', 'very-simple-event-list' );
}
if (empty($widget_start_label)) {
	$widget_start_label = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
}
if (empty($widget_end_label)) {
	$widget_end_label = esc_attr__( 'End date: %s', 'very-simple-event-list' );
}
if (empty($widget_time_label)) {
	$widget_time_label = esc_attr__( 'Time: %s', 'very-simple-event-list' );
}
if (empty($widget_location_label)) {
	$widget_location_label = esc_attr__( 'Location: %s', 'very-simple-event-list' );
}

// show default label if empty meta
if (empty($widget_link_label)) {
	$widget_link_label = esc_attr__( 'More info', 'very-simple-event-list' );
}

// set link target
if ($widget_link_target == 'yes') {
	$widget_link_target = ' target="_blank"';
} else {
	$widget_link_target = ' target="_self"';
}

// set image size for featured image
if ($widget_image_size == "small") {
	$widget_post_thumbnail = 'thumbnail';
} elseif ($widget_image_size == "medium") {
	$widget_post_thumbnail = 'medium';
} elseif ($widget_image_size == "large") {
	$widget_post_thumbnail = 'large';
} else {
	$widget_post_thumbnail = 'post-thumbnail';
}

// display the event list
$output .= '<div id="event-'.get_the_ID().'" class="col-lg-3 col-md-4 col-sm-6 vsel-tile-container">';
$output .= '<div class="vsel-tile">';
$output .= sprintf( '<a href="%1$s"'. $widget_link_target .'>', esc_url('http://v2.celine-dodeman.com/agenda-stages/'));
$output .= '<div class="vsel-tile-image">' . get_the_post_thumbnail( null, $widget_post_thumbnail, array('alt' => ''. get_the_title() .'') ) . '</div>';
$output .= '<h4 class="vsel-tile-title">' . get_the_title() . '</h4>';
$output .= '<span class="vsel-tile-date">' . date_i18n( "d M", esc_attr($widget_start_date) ) . '</span>';

$output .= '</a></div></div>';
//    $output .= '<div class="vsel-meta">';
//		if ($widget_link_title != 'yes') {
//			$output .= '<h4 class="vsel-meta-title">' . get_the_title() . '</h4>';
//		} else {
//			$output .=  '<h4 class="vsel-meta-title"><a href="'. get_permalink() .'" rel="bookmark" title="'. get_the_title() .'">'. get_the_title() .'</a></h4>';
//		}
//		if ( !empty($widget_start_date) && !empty($widget_end_date) ) {
//			// error in case of wrong date
//			if ($widget_start_date > $widget_end_date) {
//				$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
//				$output .= esc_attr__( 'Error: please reset date', 'very-simple-event-list' );
//				$output .= '</p>';
//			}
//			if ( ($widget_date_hide != 'yes') ) {
//				if ($widget_end_date > $widget_start_date) {
//					if ($widget_date_combine == "yes") {
//						$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
//						$output .= sprintf(esc_attr($widget_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($widget_start_date) ).'</span>' );
//						$output .= ' - ';
//						$output .= sprintf(esc_attr($widget_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($widget_end_date) ).'</span>' );
//						$output .= '</p>';
//					} else {
//						$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
//						$output .= sprintf(esc_attr($widget_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($widget_start_date) ).'</span>' );
//						$output .= '</p>';
//						$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
//						$output .= sprintf(esc_attr($widget_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($widget_end_date) ).'</span>' );
//						$output .= '</p>';
//					}
//				} elseif ($widget_end_date == $widget_start_date) {
//					$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
//					$output .= sprintf(esc_attr($widget_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($widget_end_date) ).'</span>' );
//					$output .= '</p>';
//				}
//			}
//		}
//		if ($widget_time_hide != 'yes') {
//			if (!empty($widget_time)){
//				$output .= '<p class="vsel-meta-time">';
//				$output .= sprintf(esc_attr($widget_time_label), '<span>'.esc_attr($widget_time).'</span>' );
//				$output .= '</p>';
//			}
//		}
//		if ($widget_location_hide != 'yes') {
//			if (!empty($widget_location)){
//				$output .= '<p class="vsel-meta-location">';
//				$output .= sprintf(esc_attr($widget_location_label), '<span>'.esc_attr($widget_location).'</span>' );
//				$output .= '</p>';
//			}
//		}
//		if ($widget_link_hide != 'yes') {
//			if (!empty($widget_link)){
//				$output .= '<p class="vsel-meta-link">';
//				$output .= sprintf( '<a href="%1$s"'. $widget_link_target .'>%2$s</a>', esc_url($widget_link), esc_attr($widget_link_label) );
//				$output .= '</p>';
//			}
//		}
//        $output .= '<div class="vsel-info">';
//        if ($widget_excerpt != 'yes') {
//            $output .= $content = apply_filters( 'the_content', get_the_content() );
//        } elseif (!empty($widget_summary)) {
//            $output .= apply_filters( 'the_excerpt', $widget_summary );
//        }  else {
//            $output .= $content = apply_filters( 'the_excerpt', get_the_excerpt() );
//        }
//        $output .= '</div>';
//	$output .= '</div>';
//	$output .= '<div class="vsel-image-info">';
//		if ($widget_image_hide != 'yes') {
//			if ( has_post_thumbnail() ) {
//				if ($widget_link_image != 'yes') {
//					$output .= get_the_post_thumbnail( null, $widget_post_thumbnail, array('class' => 'vsel-image', 'alt' => ''. get_the_title() .'') );
//				} else {
//					$output .=  '<a href="'. get_permalink() .'">'. get_the_post_thumbnail( null, $widget_post_thumbnail, array('class' => 'vsel-image', 'title' => ''. get_the_title() .'', 'alt' => ''. get_the_title() .'') ) .'</a>';
//				}
//			}
//		}
////		if ($widget_info_hide != 'yes') {
////			$output .= '<div class="vsel-info">';
////				if ($widget_excerpt != 'yes') {
////					$output .= $content = apply_filters( 'the_content', get_the_content() );
////				} elseif (!empty($widget_summary)) {
////					$output .= apply_filters( 'the_excerpt', $widget_summary );
////				}  else {
////					$output .= $content = apply_filters( 'the_excerpt', get_the_excerpt() );
////				}
////			$output .= '</div>';
////		}
//	$output .= '</div>';
//$output .= '</div>';
