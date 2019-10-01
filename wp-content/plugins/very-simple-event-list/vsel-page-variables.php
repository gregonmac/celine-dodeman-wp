<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// get setting for date format
$date_format_custom = get_option('vsel-setting-38');

// set date format
if ( !empty($date_format_custom) ) {
	$date_format = $date_format_custom;
} else {
	$date_format = get_option('date_format');
}

// get settings to disable theme template support
$page_disable_single_template = get_option('vsel-setting-39');
$page_disable_category_template = get_option('vsel-setting-40');
$page_disable_post_type_template = get_option('vsel-setting-43');
$page_disable_search_template = get_option('vsel-setting-41');

// get event meta
$page_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
$page_end_date = get_post_meta( get_the_ID(), 'event-date', true );
$page_time = get_post_meta( get_the_ID(), 'event-time', true );
$page_location = get_post_meta( get_the_ID(), 'event-location', true );
$page_link = get_post_meta( get_the_ID(), 'event-link', true );
$page_link_label = get_post_meta( get_the_ID(), 'event-link-label', true );
$page_link_target = get_post_meta( get_the_ID(), 'event-link-target', true );
$page_summary = get_post_meta( get_the_ID(), 'event-summary', true );

// get custom labels from settingspage
$page_date_label = get_option('vsel-setting-16');
$page_start_label = get_option('vsel-setting-17');
$page_end_label = get_option('vsel-setting-18');
$page_time_label = get_option('vsel-setting-19');
$page_location_label = get_option('vsel-setting-20');

// get setting to combine dates on the same line
$page_date_combine = get_option('vsel-setting-15');

// get setting to show excerpt
$page_excerpt = get_option('vsel-setting-13');

// get settings to link title and featured image to event page
$page_link_title = get_option('vsel-setting-9');
$page_link_image = get_option('vsel-setting-29');

// get setting to link category to category page
$page_link_cat = get_option('vsel-setting-44');

// get settings for event layout
$page_meta_loc = get_option('vsel-setting-35');
$page_image_loc = get_option('vsel-setting-36');

// get setting to set featured image size
$page_image_size = get_option('vsel-setting-30');

// get settings to hide elements
$page_date_hide = get_option('vsel-setting-8');
$page_time_hide = get_option('vsel-setting-11');
$page_location_hide = get_option('vsel-setting-12');
$page_image_hide = get_option('vsel-setting-27');
$page_info_hide = get_option('vsel-setting-28');
$page_link_hide = get_option('vsel-setting-10');
$page_cats_hide = get_option('vsel-setting-33');
$page_pagination_hide = get_option('vsel-setting-42');
$page_acf_hide = get_option('vsel-setting-51');

// show default label if no custom label is set
if (empty($page_date_label)) {
	$page_date_label = __( 'Date: %s', 'very-simple-event-list' );
}
if (empty($page_start_label)) {
	$page_start_label = __( 'Start date: %s', 'very-simple-event-list' );
}
if (empty($page_end_label)) {
	$page_end_label = __( 'End date: %s', 'very-simple-event-list' );
}
if (empty($page_time_label)) {
	$page_time_label = __( 'Time: %s', 'very-simple-event-list' );
}
if (empty($page_location_label)) {
	$page_location_label = __( 'Location: %s', 'very-simple-event-list' );
}
if (empty($page_link_label)) {
	$page_link_label = __( 'More info', 'very-simple-event-list' );
}
 
// set link target
if ($page_link_target == 'yes') {
	$page_link_target = ' target="_blank"';
} else {
	$page_link_target = ' target="_self"';
}

// set image size for featured image
if ($page_image_size == "small") {
	$page_image_source = 'thumbnail';
} elseif ($page_image_size == "medium") {
	$page_image_source = 'medium';
} elseif ($page_image_size == "large") {
	$page_image_source = 'large';
} else {
	$page_image_source = 'post-thumbnail';
}

// css class for featured image
if ($page_image_loc == 'left') {
	$page_img_class = 'vsel-image-left';
} else {
	$page_img_class = 'vsel-image';
}

// css class for meta and image info section
if ($page_meta_loc == 'right') {
	$page_meta_class = 'vsel-meta-right';
	$page_image_info_class = 'vsel-image-info-left';
} else {
	$page_meta_class = 'vsel-meta';
	$page_image_info_class = 'vsel-image-info';
}

// css class when image info section is hidden or not
if ( ($page_image_hide == 'yes') && ($page_info_hide == 'yes') ) {
	$page_meta_section_start = '<div class="vsel-meta-full">';
	$page_meta_section_end = '</div>';
	$page_image_info_section_start = '';
	$page_image_info_section_end = '';
} else {
	$page_meta_section_start = '<div class="'.$page_meta_class.'">';
	$page_meta_section_end = '</div>';
	$page_image_info_section_start = '<div class="'.$page_image_info_class.'">';
	$page_image_info_section_end = '</div>';
}

// separator for date
$sep = ' - ';
