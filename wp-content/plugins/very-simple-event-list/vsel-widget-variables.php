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

// get event meta
$widget_start_date = get_post_meta( get_the_ID(), 'event-start-date', true );
$widget_end_date = get_post_meta( get_the_ID(), 'event-date', true );
$widget_time = get_post_meta( get_the_ID(), 'event-time', true );
$widget_location = get_post_meta( get_the_ID(), 'event-location', true );
$widget_link = get_post_meta( get_the_ID(), 'event-link', true );
$widget_link_label = get_post_meta( get_the_ID(), 'event-link-label', true );
$widget_link_target = get_post_meta( get_the_ID(), 'event-link-target', true );
$widget_summary = get_post_meta( get_the_ID(), 'event-summary', true );

// get custom labels from settingspage
$widget_date_label = get_option('vsel-setting-22');
$widget_start_label = get_option('vsel-setting-23');
$widget_end_label = get_option('vsel-setting-24');
$widget_time_label = get_option('vsel-setting-25');
$widget_location_label = get_option('vsel-setting-26');

// get setting to combine dates on the same line
$widget_date_combine = get_option('vsel-setting-21');

// get setting to show excerpt
$widget_excerpt = get_option('vsel-setting-1');

// get settings to link title and featured image to event page
$widget_link_title = get_option('vsel-setting-14');
$widget_link_image = get_option('vsel-setting-31');

// get setting to link category to category page
$widget_link_cat = get_option('vsel-setting-45');

// get setting for event layout
$widget_image_loc = get_option('vsel-setting-37');

// get setting to set featured image size
$widget_image_size = get_option('vsel-setting-32');

// get settings to hide elements
$widget_date_hide = get_option('vsel-setting-2');
$widget_time_hide = get_option('vsel-setting-3');
$widget_location_hide = get_option('vsel-setting-4');
$widget_image_hide = get_option('vsel-setting-5');
$widget_info_hide = get_option('vsel-setting-7');
$widget_link_hide = get_option('vsel-setting-6');
$widget_cats_hide = get_option('vsel-setting-34');
$widget_acf_hide = get_option('vsel-setting-52');

// show default label if no custom label is set
if (empty($widget_date_label)) {
	$widget_date_label = __( 'Date: %s', 'very-simple-event-list' );
}
if (empty($widget_start_label)) {
	$widget_start_label = __( 'Start date: %s', 'very-simple-event-list' );
}
if (empty($widget_end_label)) {
	$widget_end_label = __( 'End date: %s', 'very-simple-event-list' );
}
if (empty($widget_time_label)) {
	$widget_time_label = __( 'Time: %s', 'very-simple-event-list' );
}
if (empty($widget_location_label)) {
	$widget_location_label = __( 'Location: %s', 'very-simple-event-list' );
}
if (empty($widget_link_label)) {
	$widget_link_label = __( 'More info', 'very-simple-event-list' );
}

// set link target
if ($widget_link_target == 'yes') {
	$widget_link_target = ' target="_blank"';
} else {
	$widget_link_target = ' target="_self"';
}

// set image size for featured image
if ($widget_image_size == "small") {
	$widget_image_source = 'thumbnail';
} elseif ($widget_image_size == "medium") {
	$widget_image_source = 'medium';
} elseif ($widget_image_size == "large") {
	$widget_image_source = 'large';
} else {
	$widget_image_source = 'post-thumbnail';
}

// css class for featured image
if ($widget_image_loc == 'left') {
	$widget_img_class = 'vsel-image-left';
} else {
	$widget_img_class = 'vsel-image';
}

// separator for date
$sep = ' - ';
