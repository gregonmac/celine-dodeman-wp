<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get labels from settingspage
$page_date_label = esc_attr(get_option('vsel-setting-16'));
$page_start_label = esc_attr(get_option('vsel-setting-17'));
$page_end_label = esc_attr(get_option('vsel-setting-18'));
$page_time_label = esc_attr(get_option('vsel-setting-19'));
$page_location_label = esc_attr(get_option('vsel-setting-20'));

// get setting to combine dates
$page_date_combine = esc_attr(get_option('vsel-setting-15'));

// get setting to show excerpt
$page_excerpt = esc_attr(get_option('vsel-setting-13'));

// get settings to link title and image to single event
$page_link_title = esc_attr(get_option('vsel-setting-9'));
$page_link_image = esc_attr(get_option('vsel-setting-29'));

// get setting to set image size
$page_image_size = esc_attr(get_option('vsel-setting-30'));

// get settings to hide elements
$page_date_hide = esc_attr(get_option('vsel-setting-8'));
$page_time_hide = esc_attr(get_option('vsel-setting-11'));
$page_location_hide = esc_attr(get_option('vsel-setting-12'));
$page_image_hide = esc_attr(get_option('vsel-setting-27'));
$page_info_hide = esc_attr(get_option('vsel-setting-28'));
$page_link_hide = esc_attr(get_option('vsel-setting-10'));

// show default label if empty setting
if (empty($page_date_label)) {
	$page_date_label = esc_attr__( 'Date: %s', 'very-simple-event-list' );
}
if (empty($page_start_label)) {
	$page_start_label = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
}
if (empty($page_end_label)) {
	$page_end_label = esc_attr__( 'End date: %s', 'very-simple-event-list' );
}
if (empty($page_time_label)) {
	$page_time_label = esc_attr__( 'Time: %s', 'very-simple-event-list' );
}
if (empty($page_location_label)) {
	$page_location_label = esc_attr__( 'Location: %s', 'very-simple-event-list' );
}

// show default label if empty meta
if (empty($page_link_label)) {
	$page_link_label = esc_attr__( 'More info', 'very-simple-event-list' );
}

// set link target
if ($page_link_target == 'yes') {
	$page_link_target = ' target="_blank"';
} else {
	$page_link_target = ' target="_self"';
}

// set image size for featured image
if ($page_image_size == "small") {
	$page_post_thumbnail = 'thumbnail';
} elseif ($page_image_size == "medium") {
	$page_post_thumbnail = 'medium';
} elseif ($page_image_size == "large") {
	$page_post_thumbnail = 'large';
} else {
	$page_post_thumbnail = 'post-thumbnail';
}


$url=get_the_post_thumbnail(null, $page_post_thumbnail, array('alt' => '' . get_the_title() . ''));
$title = get_the_title();
$content = get_the_content();
$date = date_i18n(get_option('date_format'), esc_attr($page_start_date)) . " " . $page_time;
$id=get_the_ID();

$output .= <<<EOT
  <article id="event-$id" class="post-725 post type-post status-publish format-video has-post-thumbnail hentry category-video post_format-post-format-video" itemtype="http://schema.org/BlogPosting">
	<div class="post-img-wrap latestnews-box"><div class="">
	    $url
	 </div>
	 </div>
    <div class="listpost-content-wrap">
	<div class="list-post-top">

	<header class="entry-header">
		<h1 class="entry-title"><a>$title</a></h1>
	</header><!-- .entry-header -->

	<div class="entry-content"><p>$content</p>

	<footer class="entry-footer">
        $date
	</footer><!-- .entry-footer -->
	</div><!-- .entry-content --><!-- .entry-summary -->
	</div><!-- .list-post-top -->
</div><!-- .listpost-content-wrap -->
</article>
EOT;
//// display the event list
//$output .= '<div id="event-'.get_the_ID().'" class="col-lg-4 col-md-4 col-sm-6">';
//	if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
//		$output .= '<div class="vsel-meta-full">';
//	} else {
//		$output .= '<div class="vsel-meta">';
//	}
//		if ($page_link_title != 'yes') {
//			$output .= '<h4 class="vsel-meta-title">' . get_the_title() . '</h4>';
//		} else {
//			$output .=  '<h4 class="vsel-meta-title"><a href="'. get_permalink() .'" rel="bookmark" title="'. get_the_title() .'">'. get_the_title() .'</a></h4>';
//		}
//		if ( !empty($page_start_date) && !empty($page_end_date) ) {
//			// error in case of wrong date
//			if ($page_start_date > $page_end_date) {
//				$output .= '<p class="vsel-meta-date vsel-meta-error-date">';
//				$output .= esc_attr__( 'Error: please reset date', 'very-simple-event-list' );
//				$output .= '</p>';
//			}
//			if ( ($page_date_hide != 'yes') ) {
//				if ($page_end_date > $page_start_date) {
//					if ($page_date_combine == "yes") {
//						$output .= '<p class="vsel-meta-date vsel-meta-combined-date">';
//						$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' );
//						$output .= ' - ';
//						$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' );
//						$output .= '</p>';
//					} else {
//						$output .= '<p class="vsel-meta-date vsel-meta-start-date">';
//						$output .= sprintf(esc_attr($page_start_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_start_date) ).'</span>' );
//						$output .= '</p>';
//						$output .= '<p class="vsel-meta-date vsel-meta-end-date">';
//						$output .= sprintf(esc_attr($page_end_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' );
//						$output .= '</p>';
//					}
//				} elseif ($page_end_date == $page_start_date) {
//					$output .= '<p class="vsel-meta-date vsel-meta-single-date">';
//					$output .= sprintf(esc_attr($page_date_label), '<span>'.date_i18n( get_option( 'date_format' ), esc_attr($page_end_date) ).'</span>' );
//					$output .= '</p>';
//				}
//			}
//		}
//		if ( ($page_time_hide != 'yes') ) {
//			if (!empty($page_time)){
//				$output .= '<p class="vsel-meta-time">';
//				$output .= sprintf(esc_attr($page_time_label), '<span>'.esc_attr($page_time).'</span>' );
//				$output .= '</p>';
//			}
//		}
//		if ( ($page_location_hide != 'yes') ) {
//			if (!empty($page_location)){
//				$output .= '<p class="vsel-meta-location">';
//				$output .= sprintf(esc_attr($page_location_label), '<span>'.esc_attr($page_location).'</span>' );
//				$output .= '</p>';
//			}
//		}
//		if ( ($page_link_hide != 'yes') ) {
//			if (!empty($page_link)){
//				$output .= '<p class="vsel-meta-link">';
//				$output .= sprintf( '<a href="%1$s"'. $page_link_target .'>%2$s</a>', esc_url($page_link), esc_attr($page_link_label) );
//				$output .= '</p>';
//			}
//		}
//	$output .= '</div>';
//	if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
//		$output .= esc_attr('');
//	} else {
//		$output .= '<div class="vsel-image-info">';
//			if ( ($page_image_hide != 'yes') ) {
//				if ( has_post_thumbnail() ) {
//					if ($page_link_image != 'yes') {
//						$output .= get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'alt' => ''. get_the_title() .'') );
//					} else {
//						$output .=  '<a href="'. get_permalink() .'">'. get_the_post_thumbnail( null, $page_post_thumbnail, array('class' => 'vsel-image', 'title' => ''. get_the_title() .'', 'alt' => ''. get_the_title() .'') ) .'</a>';
//					}
//				}
//			}
//			if ( ($page_info_hide != 'yes') ) {
//				$output .= '<div class="vsel-info">';
//					if ($page_excerpt != 'yes') {
//						$output .= $content = apply_filters( 'the_content', get_the_content() );
//					} elseif (!empty($page_summary)) {
//						$output .= apply_filters( 'the_excerpt', $page_summary );
//					}  else {
//						$output .= $content = apply_filters( 'the_excerpt', get_the_excerpt() );
//					}
//				$output .= '</div>';
//			}
//		$output .= '</div>';
//	}
//$output .= '</div>';
