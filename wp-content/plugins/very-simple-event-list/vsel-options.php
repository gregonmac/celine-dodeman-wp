<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add admin options page
function vsel_menu_page() {
    add_options_page( __( 'VSEL', 'very-simple-event-list' ), __( 'VSEL', 'very-simple-event-list' ), 'manage_options', 'vsel', 'vsel_options_page' );
}
add_action( 'admin_menu', 'vsel_menu_page' );

// add admin settings and such 
function vsel_admin_init() {
	add_settings_section( 'vsel-section', __( 'General', 'very-simple-event-list' ), 'vsel_section_callback', 'vsel' );

	add_settings_field( 'vsel-field', __( 'Uninstall', 'very-simple-event-list' ), 'vsel_field_callback', 'vsel', 'vsel-section' );
	register_setting( 'vsel-options', 'vsel-setting', 'esc_attr' );

	add_settings_section( 'vsel-section-3', __( 'Page', 'very-simple-event-list' ), 'vsel_section_callback_3', 'vsel' );

	add_settings_field( 'vsel-field-9', __( 'Title', 'very-simple-event-list' ), 'vsel_field_callback_9', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-9', 'esc_attr' );

	add_settings_field( 'vsel-field-29', __( 'Image', 'very-simple-event-list' ), 'vsel_field_callback_29', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-29', 'esc_attr' );

	add_settings_field( 'vsel-field-30', __( 'Image size', 'very-simple-event-list' ), 'vsel_field_callback_30', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-30', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-13', __( 'Summary', 'very-simple-event-list' ), 'vsel_field_callback_13', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-13', 'esc_attr' );

	add_settings_field( 'vsel-field-15', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_15', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-15', 'esc_attr' );

	add_settings_field( 'vsel-field-8', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_8', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-8', 'esc_attr' );

	add_settings_field( 'vsel-field-11', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_11', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-11', 'esc_attr' );

	add_settings_field( 'vsel-field-12', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_12', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-12', 'esc_attr' );

	add_settings_field( 'vsel-field-27', __( 'Image', 'very-simple-event-list' ), 'vsel_field_callback_27', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-27', 'esc_attr' );

	add_settings_field( 'vsel-field-28', __( 'Content', 'very-simple-event-list' ), 'vsel_field_callback_28', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-28', 'esc_attr' );

	add_settings_field( 'vsel-field-10', __( 'Link to more info', 'very-simple-event-list' ), 'vsel_field_callback_10', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-10', 'esc_attr' );

	add_settings_field( 'vsel-field-16', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_16', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-16', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-17', __( 'Start date', 'very-simple-event-list' ), 'vsel_field_callback_17', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-17', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-18', __( 'End date', 'very-simple-event-list' ), 'vsel_field_callback_18', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-18', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-19', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_19', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-19', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-20', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_20', 'vsel', 'vsel-section-3' );
	register_setting( 'vsel-options', 'vsel-setting-20', 'sanitize_text_field' );

	add_settings_section( 'vsel-section-2', __( 'Widget', 'very-simple-event-list' ), 'vsel_section_callback_2', 'vsel' );

	add_settings_field( 'vsel-field-14', __( 'Title', 'very-simple-event-list' ), 'vsel_field_callback_14', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-14', 'esc_attr' );

	add_settings_field( 'vsel-field-31', __( 'Image', 'very-simple-event-list' ), 'vsel_field_callback_31', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-31', 'esc_attr' );

	add_settings_field( 'vsel-field-32', __( 'Image size', 'very-simple-event-list' ), 'vsel_field_callback_32', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-32', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-1', __( 'Summary', 'very-simple-event-list' ), 'vsel_field_callback_1', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-1', 'esc_attr' );

	add_settings_field( 'vsel-field-21', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_21', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-21', 'esc_attr' );

	add_settings_field( 'vsel-field-2', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_2', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-2', 'esc_attr' );

	add_settings_field( 'vsel-field-3', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_3', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-3', 'esc_attr' );

	add_settings_field( 'vsel-field-4', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_4', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-4', 'esc_attr' );

	add_settings_field( 'vsel-field-5', __( 'Image', 'very-simple-event-list' ), 'vsel_field_callback_5', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-5', 'esc_attr' );

	add_settings_field( 'vsel-field-7', __( 'Content', 'very-simple-event-list' ), 'vsel_field_callback_7', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-7', 'esc_attr' );

	add_settings_field( 'vsel-field-6', __( 'Link to more info', 'very-simple-event-list' ), 'vsel_field_callback_6', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-6', 'esc_attr' );

	add_settings_field( 'vsel-field-22', __( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_22', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-22', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-23', __( 'Start date', 'very-simple-event-list' ), 'vsel_field_callback_23', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-23', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-24', __( 'End date', 'very-simple-event-list' ), 'vsel_field_callback_24', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-24', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-25', __( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_25', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-25', 'sanitize_text_field' );

	add_settings_field( 'vsel-field-26', __( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_26', 'vsel', 'vsel-section-2' );
	register_setting( 'vsel-options', 'vsel-setting-26', 'sanitize_text_field' );
}
add_action( 'admin_init', 'vsel_admin_init' );

function vsel_section_callback() {
    echo __( 'General Settings', 'very-simple-event-list' );
}

function vsel_section_callback_3() {
    echo __( 'Page Settings', 'very-simple-event-list' );
}

function vsel_section_callback_2() {
    echo __( 'Widget Settings', 'very-simple-event-list' );
}

function vsel_field_callback() {
	$value = esc_attr( get_option( 'vsel-setting' ) );
	?>
	<input type='hidden' name='vsel-setting' value='no'>
	<label><input type='checkbox' name='vsel-setting' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Do not delete events and settings.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_9() {
	$value = esc_attr( get_option( 'vsel-setting-9' ) );
	?>
	<input type='hidden' name='vsel-setting-9' value='no'>
	<label><input type='checkbox' name='vsel-setting-9' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_29() {
	$value = esc_attr( get_option( 'vsel-setting-29' ) );
	?>
	<input type='hidden' name='vsel-setting-29' value='no'>
	<label><input type='checkbox' name='vsel-setting-29' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_30() {
	$setting = esc_attr( get_option( 'vsel-setting-30' ) );
 	?>
	<select id='vsel-setting-30' name='vsel-setting-30'> 
		<option value='post-thumbnail'<?php echo ($setting == 'post-thumbnail')?'selected':''; ?>><?php _e( 'Default', 'very-simple-event-list' ); ?></option> 
		<option value='large'<?php echo ($setting == 'large')?'selected':''; ?>><?php _e( 'Large', 'very-simple-event-list' ); ?></option> 
		<option value='medium'<?php echo ($setting == 'medium')?'selected':''; ?>><?php _e( 'Medium', 'very-simple-event-list' ); ?></option> 
		<option value='small'<?php echo ($setting == 'small')?'selected':''; ?>><?php _e( 'Small', 'very-simple-event-list' ); ?></option> 
	</select> 
	<?php 
}

function vsel_field_callback_13() {
	$value = esc_attr( get_option( 'vsel-setting-13' ) );
	?>
	<input type='hidden' name='vsel-setting-13' value='no'>
	<label><input type='checkbox' name='vsel-setting-13' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Show a summary instead of all content.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_15() {
	$value = esc_attr( get_option( 'vsel-setting-15' ) );
	?>
	<input type='hidden' name='vsel-setting-15' value='no'>
	<label><input type='checkbox' name='vsel-setting-15' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Combine start date and end date in one label.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_8() {
	$value = esc_attr( get_option( 'vsel-setting-8' ) );
	?>
	<input type='hidden' name='vsel-setting-8' value='no'>
	<label><input type='checkbox' name='vsel-setting-8' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide on page with all events.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_11() {
	$value = esc_attr( get_option( 'vsel-setting-11' ) );
	?>
	<input type='hidden' name='vsel-setting-11' value='no'>
	<label><input type='checkbox' name='vsel-setting-11' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide on page with all events.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_12() {
	$value = esc_attr( get_option( 'vsel-setting-12' ) );
	?>
	<input type='hidden' name='vsel-setting-12' value='no'>
	<label><input type='checkbox' name='vsel-setting-12' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide on page with all events.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_27() { 
	$value = esc_attr( get_option( 'vsel-setting-27' ) );
	?>
	<input type='hidden' name='vsel-setting-27' value='no'>
	<label><input type='checkbox' name='vsel-setting-27' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide on page with all events.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_28() { 
	$value = esc_attr( get_option( 'vsel-setting-28' ) );
	?>
	<input type='hidden' name='vsel-setting-28' value='no'>
	<label><input type='checkbox' name='vsel-setting-28' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide on page with all events.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_10() {
	$value = esc_attr( get_option( 'vsel-setting-10' ) );
	?>
	<input type='hidden' name='vsel-setting-10' value='no'>
	<label><input type='checkbox' name='vsel-setting-10' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide on page with all events.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_16() {
	$vsel_placeholder = esc_attr__( 'Date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-16' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-16' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_17() {
	$vsel_placeholder = esc_attr__( 'Start date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-17' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-17' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_18() {
	$vsel_placeholder = esc_attr__( 'End date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-18' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-18' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_19() {
	$vsel_placeholder = esc_attr__( 'Time: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-19' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-19' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_20() {
	$vsel_placeholder = esc_attr__( 'Location: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-20' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-20' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_14() {
	$value = esc_attr( get_option( 'vsel-setting-14' ) );
	?>
	<input type='hidden' name='vsel-setting-14' value='no'>
	<label><input type='checkbox' name='vsel-setting-14' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_31() {
	$value = esc_attr( get_option( 'vsel-setting-31' ) );
	?>
	<input type='hidden' name='vsel-setting-31' value='no'>
	<label><input type='checkbox' name='vsel-setting-31' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_32() {
	$setting = esc_attr( get_option( 'vsel-setting-32' ) );
 	?>
	<select id='vsel-setting-32' name='vsel-setting-32'> 
		<option value='post-thumbnail'<?php echo ($setting == 'post-thumbnail')?'selected':''; ?>><?php _e( 'Default', 'very-simple-event-list' ); ?></option> 
		<option value='large'<?php echo ($setting == 'large')?'selected':''; ?>><?php _e( 'Large', 'very-simple-event-list' ); ?></option> 
		<option value='medium'<?php echo ($setting == 'medium')?'selected':''; ?>><?php _e( 'Medium', 'very-simple-event-list' ); ?></option> 
		<option value='small'<?php echo ($setting == 'small')?'selected':''; ?>><?php _e( 'Small', 'very-simple-event-list' ); ?></option> 
	</select> 
	<?php 
}

function vsel_field_callback_1() {
	$value = esc_attr( get_option( 'vsel-setting-1' ) );
	?>
	<input type='hidden' name='vsel-setting-1' value='no'>
	<label><input type='checkbox' name='vsel-setting-1' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Show a summary instead of all content.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_21() {
	$value = esc_attr( get_option( 'vsel-setting-21' ) );
	?>
	<input type='hidden' name='vsel-setting-21' value='no'>
	<label><input type='checkbox' name='vsel-setting-21' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Combine start date and end date in one label.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_2() { 
	$value = esc_attr( get_option( 'vsel-setting-2' ) );
	?>
	<input type='hidden' name='vsel-setting-2' value='no'>
	<label><input type='checkbox' name='vsel-setting-2' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_3() { 
	$value = esc_attr( get_option( 'vsel-setting-3' ) );
	?>
	<input type='hidden' name='vsel-setting-3' value='no'>
	<label><input type='checkbox' name='vsel-setting-3' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_4() { 
	$value = esc_attr( get_option( 'vsel-setting-4' ) );
	?>
	<input type='hidden' name='vsel-setting-4' value='no'>
	<label><input type='checkbox' name='vsel-setting-4' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_5() { 
	$value = esc_attr( get_option( 'vsel-setting-5' ) );
	?>
	<input type='hidden' name='vsel-setting-5' value='no'>
	<label><input type='checkbox' name='vsel-setting-5' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_7() { 
	$value = esc_attr( get_option( 'vsel-setting-7' ) );
	?>
	<input type='hidden' name='vsel-setting-7' value='no'>
	<label><input type='checkbox' name='vsel-setting-7' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_6() { 
	$value = esc_attr( get_option( 'vsel-setting-6' ) );
	?>
	<input type='hidden' name='vsel-setting-6' value='no'>
	<label><input type='checkbox' name='vsel-setting-6' <?php checked( $value, 'yes' ); ?> value='yes'> <?php _e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_22() {
	$vsel_placeholder = esc_attr__( 'Date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-22' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-22' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_23() {
	$vsel_placeholder = esc_attr__( 'Start date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-23' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-23' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_24() {
	$vsel_placeholder = esc_attr__( 'End date: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-24' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-24' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_25() {
	$vsel_placeholder = esc_attr__( 'Time: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-25' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-25' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

function vsel_field_callback_26() {
	$vsel_placeholder = esc_attr__( 'Location: %s', 'very-simple-event-list' ); 
	$vsel_setting = esc_attr( get_option( 'vsel-setting-26' ) );
	echo "<input type='text' size='40' maxlength='40' name='vsel-setting-26' placeholder='$vsel_placeholder' value='$vsel_setting' />";
}

// display admin options page
function vsel_options_page() {
?>
<div class="wrap"> 
	<div id="icon-plugins" class="icon32"></div> 
	<h1><?php _e( 'Very Simple Event List', 'very-simple-event-list' ); ?></h1> 
	<form action="options.php" method="POST">
	<?php settings_fields( 'vsel-options' ); ?>
	<?php do_settings_sections( 'vsel' ); ?>
	<?php submit_button(); ?>
	</form>
</div>
<?php
}
