<?php
// disable direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// add admin options page
function vsel_menu_page() {
    add_options_page( esc_attr__( 'VSEL', 'very-simple-event-list' ), esc_attr__( 'VSEL', 'very-simple-event-list' ), 'manage_options', 'vsel', 'vsel_options_page' );
}
add_action( 'admin_menu', 'vsel_menu_page' );

// add admin settings and such
function vsel_admin_init() {
	add_settings_section( 'vsel-general-section', esc_attr__( 'General', 'very-simple-event-list' ), '', 'vsel-general' );

	add_settings_field( 'vsel-field', esc_attr__( 'Uninstall', 'very-simple-event-list' ), 'vsel_field_callback', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-38', esc_attr__( 'Date Format', 'very-simple-event-list' ), 'vsel_field_callback_38', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-38', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-39', esc_attr__( 'Single Event', 'very-simple-event-list' ), 'vsel_field_callback_39', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-39', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-40', esc_attr__( 'Event Category', 'very-simple-event-list' ), 'vsel_field_callback_40', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-40', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-43', esc_attr__( 'Post Type Archive', 'very-simple-event-list' ), 'vsel_field_callback_43', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-43', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-41', esc_attr__( 'Search Results', 'very-simple-event-list' ), 'vsel_field_callback_41', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-41', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-48', esc_attr__( 'Post Type Archive', 'very-simple-event-list' ), 'vsel_field_callback_48', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-48', array('sanitize_callback' => 'sanitize_key') );	
	
	add_settings_field( 'vsel-field-49', esc_attr__( 'Post Attributes', 'very-simple-event-list' ), 'vsel_field_callback_49', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-49', array('sanitize_callback' => 'sanitize_key') );	
	
	add_settings_field( 'vsel-field-50', esc_attr__( 'Menu Page', 'very-simple-event-list' ), 'vsel_field_callback_50', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-50', array('sanitize_callback' => 'sanitize_key') );	

	add_settings_field( 'vsel-field-46', esc_attr__( 'Single Event base', 'very-simple-event-list' ), 'vsel_field_callback_46', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-46', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-47', esc_attr__( 'Event Category base', 'very-simple-event-list' ), 'vsel_field_callback_47', 'vsel-general', 'vsel-general-section' );
	register_setting( 'vsel-general-options', 'vsel-setting-47', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_section( 'vsel-page-section', esc_attr__( 'Page', 'very-simple-event-list' ), '', 'vsel-page' );

	add_settings_field( 'vsel-field-35', esc_attr__( 'Event Meta', 'very-simple-event-list' ), 'vsel_field_callback_35', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-35', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-36', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_36', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-36', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-30', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_30', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-30', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-9', esc_attr__( 'Title', 'very-simple-event-list' ), 'vsel_field_callback_9', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-9', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-44', esc_attr__( 'Event Category', 'very-simple-event-list' ), 'vsel_field_callback_44', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-44', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-29', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_29', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-29', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-13', esc_attr__( 'Summary', 'very-simple-event-list' ), 'vsel_field_callback_13', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-13', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-15', esc_attr__( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_15', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-15', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-8', esc_attr__( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_8', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-8', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-11', esc_attr__( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_11', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-11', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-12', esc_attr__( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_12', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-12', array('sanitize_callback' => 'sanitize_key') );
	
	add_settings_field( 'vsel-field-33', esc_attr__( 'Event Category', 'very-simple-event-list' ), 'vsel_field_callback_33', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-33', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-27', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_27', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-27', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-28', esc_attr__( 'Info', 'very-simple-event-list' ), 'vsel_field_callback_28', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-28', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-10', esc_attr__( 'Link to more info', 'very-simple-event-list' ), 'vsel_field_callback_10', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-10', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-42', esc_attr__( 'Pagination', 'very-simple-event-list' ), 'vsel_field_callback_42', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-42', array('sanitize_callback' => 'sanitize_key') );

	if( class_exists('acf') ) {
		add_settings_field( 'vsel-field-51', esc_attr__( 'ACF fields', 'very-simple-event-list' ), 'vsel_field_callback_51', 'vsel-page', 'vsel-page-section' );
		register_setting( 'vsel-page-options', 'vsel-setting-51', array('sanitize_callback' => 'sanitize_key') );
	}

	add_settings_field( 'vsel-field-16', esc_attr__( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_16', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-16', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-17', esc_attr__( 'Start date', 'very-simple-event-list' ), 'vsel_field_callback_17', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-17', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-18', esc_attr__( 'End date', 'very-simple-event-list' ), 'vsel_field_callback_18', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-18', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-19', esc_attr__( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_19', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-19', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-20', esc_attr__( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_20', 'vsel-page', 'vsel-page-section' );
	register_setting( 'vsel-page-options', 'vsel-setting-20', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_section( 'vsel-widget-section', esc_attr__( 'Widget', 'very-simple-event-list' ), '', 'vsel-widget' );

	add_settings_field( 'vsel-field-37', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_37', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-37', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-32', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_32', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-32', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-14', esc_attr__( 'Title', 'very-simple-event-list' ), 'vsel_field_callback_14', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-14', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-45', esc_attr__( 'Event Category', 'very-simple-event-list' ), 'vsel_field_callback_45', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-45', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-31', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_31', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-31', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-1', esc_attr__( 'Summary', 'very-simple-event-list' ), 'vsel_field_callback_1', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-1', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-21', esc_attr__( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_21', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-21', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-2', esc_attr__( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_2', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-2', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-3', esc_attr__( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_3', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-3', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-4', esc_attr__( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_4', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-4', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-34', esc_attr__( 'Event Category', 'very-simple-event-list' ), 'vsel_field_callback_34', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-34', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-5', esc_attr__( 'Featured Image', 'very-simple-event-list' ), 'vsel_field_callback_5', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-5', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-7', esc_attr__( 'Info', 'very-simple-event-list' ), 'vsel_field_callback_7', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-7', array('sanitize_callback' => 'sanitize_key') );

	add_settings_field( 'vsel-field-6', esc_attr__( 'Link to more info', 'very-simple-event-list' ), 'vsel_field_callback_6', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-6', array('sanitize_callback' => 'sanitize_key') );

	if( class_exists('acf') ) {
		add_settings_field( 'vsel-field-52', esc_attr__( 'ACF fields', 'very-simple-event-list' ), 'vsel_field_callback_52', 'vsel-widget', 'vsel-widget-section' );
		register_setting( 'vsel-widget-options', 'vsel-setting-52', array('sanitize_callback' => 'sanitize_key') );
	}

	add_settings_field( 'vsel-field-22', esc_attr__( 'Date', 'very-simple-event-list' ), 'vsel_field_callback_22', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-22', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-23', esc_attr__( 'Start date', 'very-simple-event-list' ), 'vsel_field_callback_23', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-23', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-24', esc_attr__( 'End date', 'very-simple-event-list' ), 'vsel_field_callback_24', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-24', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-25', esc_attr__( 'Time', 'very-simple-event-list' ), 'vsel_field_callback_25', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-25', array('sanitize_callback' => 'sanitize_text_field') );

	add_settings_field( 'vsel-field-26', esc_attr__( 'Location', 'very-simple-event-list' ), 'vsel_field_callback_26', 'vsel-widget', 'vsel-widget-section' );
	register_setting( 'vsel-widget-options', 'vsel-setting-26', array('sanitize_callback' => 'sanitize_text_field') );
}
add_action( 'admin_init', 'vsel_admin_init' );

function vsel_field_callback() {
	$value = esc_attr( get_option( 'vsel-setting' ) );
	?>
	<input type='hidden' name='vsel-setting' value='no'>
	<label><input type='checkbox' name='vsel-setting' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Do not delete events and settings.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_38() {
	$placeholder = esc_attr( get_option( 'date_format' ) );
	$value = esc_attr( get_option( 'vsel-setting-38' ) );
	echo "<input type='text' size='40' maxlength='50' name='vsel-setting-38' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_39() {
	$value = esc_attr( get_option( 'vsel-setting-39' ) );
	?>
	<input type='hidden' name='vsel-setting-39' value='no'>
	<label><input type='checkbox' name='vsel-setting-39' <?php checked( $value, 'yes' ); ?> value='yes'> <?php printf( esc_attr__( 'Disable support for the %s template.', 'very-simple-event-list' ), esc_attr__( 'Single Event', 'very-simple-event-list' ) ); ?></label>
	<?php
}

function vsel_field_callback_40() {
	$value = esc_attr( get_option( 'vsel-setting-40' ) );
	?>
	<input type='hidden' name='vsel-setting-40' value='no'>
	<label><input type='checkbox' name='vsel-setting-40' <?php checked( $value, 'yes' ); ?> value='yes'> <?php printf( esc_attr__( 'Disable support for the %s template.', 'very-simple-event-list' ), esc_attr__( 'Event Category', 'very-simple-event-list' ) ); ?></label>
	<?php
}

function vsel_field_callback_43() {
	$value = esc_attr( get_option( 'vsel-setting-43' ) );
	?>
	<input type='hidden' name='vsel-setting-43' value='no'>
	<label><input type='checkbox' name='vsel-setting-43' <?php checked( $value, 'yes' ); ?> value='yes'> <?php printf( esc_attr__( 'Disable support for the %s template.', 'very-simple-event-list' ), esc_attr__( 'Post Type Archive', 'very-simple-event-list' ) ); ?></label>
	<?php
}

function vsel_field_callback_41() {
	$value = esc_attr( get_option( 'vsel-setting-41' ) );
	?>
	<input type='hidden' name='vsel-setting-41' value='no'>
	<label><input type='checkbox' name='vsel-setting-41' <?php checked( $value, 'yes' ); ?> value='yes'> <?php printf( esc_attr__( 'Disable support for the %s template.', 'very-simple-event-list' ), esc_attr__( 'Search Results', 'very-simple-event-list' ) ); ?></label>
	<?php
}

function vsel_field_callback_48() {
	$value = esc_attr( get_option( 'vsel-setting-48' ) );
	$link_label = __( 'Permalinks', 'very-simple-event-list' );
	$link_permalinks = '<a href="'.admin_url( 'options-permalink.php' ).'">'.$link_label.'</a>';
	?>
	<input type='hidden' name='vsel-setting-48' value='no'>
	<label><input type='checkbox' name='vsel-setting-48' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Disable support.', 'very-simple-event-list' ); ?></label>
	<p><i><?php printf( esc_attr__( 'Resave the %s after changing this.', 'very-simple-event-list' ), $link_permalinks ); ?></i></p>
	<?php
}

function vsel_field_callback_49() {
	$value = esc_attr( get_option( 'vsel-setting-49' ) );
	?>
	<input type='hidden' name='vsel-setting-49' value='no'>
	<label><input type='checkbox' name='vsel-setting-49' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Disable support.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_50() {
	$value = esc_attr( get_option( 'vsel-setting-50' ) );
	?>
	<input type='hidden' name='vsel-setting-50' value='no'>
	<label><input type='checkbox' name='vsel-setting-50' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Disable support.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_46() {
	$placeholder = 'event';
	$value = esc_attr( get_option( 'vsel-setting-46' ) );
	echo "<input type='text' size='40' maxlength='50' name='vsel-setting-46' placeholder='$placeholder' value='$value' />";
	$link_label = __( 'Permalinks', 'very-simple-event-list' );
	$link_permalinks = '<a href="'.admin_url( 'options-permalink.php' ).'">'.$link_label.'</a>';
	?>
	<p><i><?php printf( esc_attr__( 'Resave the %s after changing this.', 'very-simple-event-list' ), $link_permalinks ); ?></i></p>
	<?php
}

function vsel_field_callback_47() {
	$placeholder = 'event_cat';
	$value = esc_attr( get_option( 'vsel-setting-47' ) );
	echo "<input type='text' size='40' maxlength='50' name='vsel-setting-47' placeholder='$placeholder' value='$value' />";
	$link_label = __( 'Permalinks', 'very-simple-event-list' );
	$link_permalinks = '<a href="'.admin_url( 'options-permalink.php' ).'">'.$link_label.'</a>';
	?>
	<p><i><?php printf( esc_attr__( 'Resave the %s after changing this.', 'very-simple-event-list' ), $link_permalinks ); ?></i></p>
	<?php
}

function vsel_field_callback_35() {
	$value = esc_attr( get_option( 'vsel-setting-35' ) );
 	?>
	<select id='vsel-setting-35' name='vsel-setting-35'>
		<option value='left'<?php echo ($value == 'left') ? 'selected' : ''; ?>><?php esc_attr_e( 'Align Left', 'very-simple-event-list' ); ?></option>
		<option value='right'<?php echo ($value == 'right') ? 'selected' : ''; ?>><?php esc_attr_e( 'Align Right', 'very-simple-event-list' ); ?></option>
	</select>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Align Left', 'very-simple-event-list' ) ); ?></i></p>
	<?php
}

function vsel_field_callback_36() {
	$value = esc_attr( get_option( 'vsel-setting-36' ) );
 	?>
	<select id='vsel-setting-36' name='vsel-setting-36'>
		<option value='right'<?php echo ($value == 'right') ? 'selected' : ''; ?>><?php esc_attr_e( 'Align Right', 'very-simple-event-list' ); ?></option>
		<option value='left'<?php echo ($value == 'left') ? 'selected' : ''; ?>><?php esc_attr_e( 'Align Left', 'very-simple-event-list' ); ?></option>
	</select>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Align Right', 'very-simple-event-list' ) ); ?></i></p>
	<?php
}

function vsel_field_callback_30() {
	$value = esc_attr( get_option( 'vsel-setting-30' ) );
 	?>
	<select id='vsel-setting-30' name='vsel-setting-30'>
		<option value='post-thumbnail'<?php echo ($value == 'post-thumbnail') ? 'selected' : ''; ?>><?php esc_attr_e( 'Post Thumbnail', 'very-simple-event-list' ); ?></option>
		<option value='large'<?php echo ($value == 'large') ? 'selected' : ''; ?>><?php esc_attr_e( 'Large', 'very-simple-event-list' ); ?></option>
		<option value='medium'<?php echo ($value == 'medium') ? 'selected' : ''; ?>><?php esc_attr_e( 'Medium', 'very-simple-event-list' ); ?></option>
		<option value='small'<?php echo ($value == 'small') ? 'selected' : ''; ?>><?php esc_attr_e( 'Small', 'very-simple-event-list' ); ?></option>
	</select>
	<?php esc_attr_e( 'This size is being used as source for the featured image.', 'very-simple-event-list' ); ?>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Post Thumbnail', 'very-simple-event-list' ) ); ?></i></p>
	<?php
}

function vsel_field_callback_9() {
	$value = esc_attr( get_option( 'vsel-setting-9' ) );
	?>
	<input type='hidden' name='vsel-setting-9' value='no'>
	<label><input type='checkbox' name='vsel-setting-9' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<p><i><?php esc_attr_e( 'This only works on pages where you have added the shortcode.', 'very-simple-event-list' ); ?></i></p>
	<?php
}

function vsel_field_callback_44() {
	$value = esc_attr( get_option( 'vsel-setting-44' ) );
	?>
	<input type='hidden' name='vsel-setting-44' value='no'>
	<label><input type='checkbox' name='vsel-setting-44' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Link to the category page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_29() {
	$value = esc_attr( get_option( 'vsel-setting-29' ) );
	?>
	<input type='hidden' name='vsel-setting-29' value='no'>
	<label><input type='checkbox' name='vsel-setting-29' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_13() {
	$value = esc_attr( get_option( 'vsel-setting-13' ) );
	?>
	<input type='hidden' name='vsel-setting-13' value='no'>
	<label><input type='checkbox' name='vsel-setting-13' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Show a summary instead of all info.', 'very-simple-event-list' ); ?></label>
	<p><i><?php esc_attr_e( 'This only works on pages where you have added the shortcode.', 'very-simple-event-list' ); ?></i></p>
	<?php
}

function vsel_field_callback_15() {
	$value = esc_attr( get_option( 'vsel-setting-15' ) );
	?>
	<input type='hidden' name='vsel-setting-15' value='no'>
	<label><input type='checkbox' name='vsel-setting-15' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Combine start date and end date in one label.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_8() {
	$value = esc_attr( get_option( 'vsel-setting-8' ) );
	?>
	<input type='hidden' name='vsel-setting-8' value='no'>
	<label><input type='checkbox' name='vsel-setting-8' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_11() {
	$value = esc_attr( get_option( 'vsel-setting-11' ) );
	?>
	<input type='hidden' name='vsel-setting-11' value='no'>
	<label><input type='checkbox' name='vsel-setting-11' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_12() {
	$value = esc_attr( get_option( 'vsel-setting-12' ) );
	?>
	<input type='hidden' name='vsel-setting-12' value='no'>
	<label><input type='checkbox' name='vsel-setting-12' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_33() {
	$value = esc_attr( get_option( 'vsel-setting-33' ) );
	?>
	<input type='hidden' name='vsel-setting-33' value='no'>
	<label><input type='checkbox' name='vsel-setting-33' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_27() {
	$value = esc_attr( get_option( 'vsel-setting-27' ) );
	?>
	<input type='hidden' name='vsel-setting-27' value='no'>
	<label><input type='checkbox' name='vsel-setting-27' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_28() {
	$value = esc_attr( get_option( 'vsel-setting-28' ) );
	?>
	<input type='hidden' name='vsel-setting-28' value='no'>
	<label><input type='checkbox' name='vsel-setting-28' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_10() {
	$value = esc_attr( get_option( 'vsel-setting-10' ) );
	?>
	<input type='hidden' name='vsel-setting-10' value='no'>
	<label><input type='checkbox' name='vsel-setting-10' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_42() {
	$value = esc_attr( get_option( 'vsel-setting-42' ) );
	?>
	<input type='hidden' name='vsel-setting-42' value='no'>
	<label><input type='checkbox' name='vsel-setting-42' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<p><i><?php esc_attr_e( 'This only works on pages where you have added the shortcode.', 'very-simple-event-list' ); ?></i></p>
	<?php
}

function vsel_field_callback_51() {
	$value = esc_attr( get_option( 'vsel-setting-51' ) );
	?>
	<input type='hidden' name='vsel-setting-51' value='no'>
	<label><input type='checkbox' name='vsel-setting-51' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_16() {
	$placeholder = esc_attr__( 'Date: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-16' ) );
	echo "<input type='text' size='40' name='vsel-setting-16' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_17() {
	$placeholder = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-17' ) );
	echo "<input type='text' size='40' name='vsel-setting-17' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_18() {
	$placeholder = esc_attr__( 'End date: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-18' ) );
	echo "<input type='text' size='40' name='vsel-setting-18' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_19() {
	$placeholder = esc_attr__( 'Time: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-19' ) );
	echo "<input type='text' size='40' name='vsel-setting-19' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_20() {
	$placeholder = esc_attr__( 'Location: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-20' ) );
	echo "<input type='text' size='40' name='vsel-setting-20' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_37() {
	$value = esc_attr( get_option( 'vsel-setting-37' ) );
 	?>
	<select id='vsel-setting-37' name='vsel-setting-37'>
		<option value='right'<?php echo ($value == 'right') ? 'selected' : ''; ?>><?php esc_attr_e( 'Align Right', 'very-simple-event-list' ); ?></option>
		<option value='left'<?php echo ($value == 'left') ? 'selected' : ''; ?>><?php esc_attr_e( 'Align Left', 'very-simple-event-list' ); ?></option>
	</select>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Align Right', 'very-simple-event-list' ) ); ?></i></p>
	<?php
}

function vsel_field_callback_32() {
	$value = esc_attr( get_option( 'vsel-setting-32' ) );
 	?>
	<select id='vsel-setting-32' name='vsel-setting-32'>
		<option value='post-thumbnail'<?php echo ($value == 'post-thumbnail') ? 'selected' : ''; ?>><?php esc_attr_e( 'Post Thumbnail', 'very-simple-event-list' ); ?></option>
		<option value='large'<?php echo ($value == 'large') ? 'selected' : ''; ?>><?php esc_attr_e( 'Large', 'very-simple-event-list' ); ?></option>
		<option value='medium'<?php echo ($value == 'medium') ? 'selected' : ''; ?>><?php esc_attr_e( 'Medium', 'very-simple-event-list' ); ?></option>
		<option value='small'<?php echo ($value == 'small') ? 'selected' : ''; ?>><?php esc_attr_e( 'Small', 'very-simple-event-list' ); ?></option>
	</select>
	<?php esc_attr_e( 'This size is being used as source for the featured image.', 'very-simple-event-list' ); ?>
	<p><i><?php printf( esc_attr__( 'Default value is %s.', 'very-simple-event-list' ), esc_attr__( 'Post Thumbnail', 'very-simple-event-list' ) ); ?></i></p>
	<?php 
}

function vsel_field_callback_14() {
	$value = esc_attr( get_option( 'vsel-setting-14' ) );
	?>
	<input type='hidden' name='vsel-setting-14' value='no'>
	<label><input type='checkbox' name='vsel-setting-14' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_45() {
	$value = esc_attr( get_option( 'vsel-setting-45' ) );
	?>
	<input type='hidden' name='vsel-setting-45' value='no'>
	<label><input type='checkbox' name='vsel-setting-45' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Link to the category page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_31() {
	$value = esc_attr( get_option( 'vsel-setting-31' ) );
	?>
	<input type='hidden' name='vsel-setting-31' value='no'>
	<label><input type='checkbox' name='vsel-setting-31' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Link to the event page.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_1() {
	$value = esc_attr( get_option( 'vsel-setting-1' ) );
	?>
	<input type='hidden' name='vsel-setting-1' value='no'>
	<label><input type='checkbox' name='vsel-setting-1' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Show a summary instead of all info.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_21() {
	$value = esc_attr( get_option( 'vsel-setting-21' ) );
	?>
	<input type='hidden' name='vsel-setting-21' value='no'>
	<label><input type='checkbox' name='vsel-setting-21' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Combine start date and end date in one label.', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_2() {
	$value = esc_attr( get_option( 'vsel-setting-2' ) );
	?>
	<input type='hidden' name='vsel-setting-2' value='no'>
	<label><input type='checkbox' name='vsel-setting-2' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_3() {
	$value = esc_attr( get_option( 'vsel-setting-3' ) );
	?>
	<input type='hidden' name='vsel-setting-3' value='no'>
	<label><input type='checkbox' name='vsel-setting-3' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_4() {
	$value = esc_attr( get_option( 'vsel-setting-4' ) );
	?>
	<input type='hidden' name='vsel-setting-4' value='no'>
	<label><input type='checkbox' name='vsel-setting-4' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_34() {
	$value = esc_attr( get_option( 'vsel-setting-34' ) );
	?>
	<input type='hidden' name='vsel-setting-34' value='no'>
	<label><input type='checkbox' name='vsel-setting-34' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_5() {
	$value = esc_attr( get_option( 'vsel-setting-5' ) );
	?>
	<input type='hidden' name='vsel-setting-5' value='no'>
	<label><input type='checkbox' name='vsel-setting-5' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_7() {
	$value = esc_attr( get_option( 'vsel-setting-7' ) );
	?>
	<input type='hidden' name='vsel-setting-7' value='no'>
	<label><input type='checkbox' name='vsel-setting-7' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_6() {
	$value = esc_attr( get_option( 'vsel-setting-6' ) );
	?>
	<input type='hidden' name='vsel-setting-6' value='no'>
	<label><input type='checkbox' name='vsel-setting-6' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_52() {
	$value = esc_attr( get_option( 'vsel-setting-52' ) );
	?>
	<input type='hidden' name='vsel-setting-52' value='no'>
	<label><input type='checkbox' name='vsel-setting-52' <?php checked( $value, 'yes' ); ?> value='yes'> <?php esc_attr_e( 'Hide', 'very-simple-event-list' ); ?></label>
	<?php
}

function vsel_field_callback_22() {
	$placeholder = esc_attr__( 'Date: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-22' ) );
	echo "<input type='text' size='40' name='vsel-setting-22' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_23() {
	$placeholder = esc_attr__( 'Start date: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-23' ) );
	echo "<input type='text' size='40' name='vsel-setting-23' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_24() {
	$placeholder = esc_attr__( 'End date: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-24' ) );
	echo "<input type='text' size='40' name='vsel-setting-24' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_25() {
	$placeholder = esc_attr__( 'Time: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-25' ) );
	echo "<input type='text' size='40' name='vsel-setting-25' placeholder='$placeholder' value='$value' />";
}

function vsel_field_callback_26() {
	$placeholder = esc_attr__( 'Location: %s', 'very-simple-event-list' );
	$value = esc_attr( get_option( 'vsel-setting-26' ) );
	echo "<input type='text' size='40' name='vsel-setting-26' placeholder='$placeholder' value='$value' />";
}

// display admin options page
function vsel_options_page() {
?>
<div class="wrap">
	<h1><?php esc_attr_e( 'Very Simple Event List', 'very-simple-event-list' ); ?></h1>
	<?php
	$active_tab = isset($_GET['tab']) ? $_GET['tab'] : 'general_options';
	?>
	<h2 class="nav-tab-wrapper">
		<a href="?page=vsel&tab=general_options" class="nav-tab <?php echo $active_tab == 'general_options' ? 'nav-tab-active' : ''; ?>"><?php esc_attr_e( 'General', 'very-simple-event-list' ); ?></a>
		<a href="?page=vsel&tab=page_options" class="nav-tab <?php echo $active_tab == 'page_options' ? 'nav-tab-active' : ''; ?>"><?php esc_attr_e( 'Page', 'very-simple-event-list' ); ?></a>
		<a href="?page=vsel&tab=widget_options" class="nav-tab <?php echo $active_tab == 'widget_options' ? 'nav-tab-active' : ''; ?>"><?php esc_attr_e( 'Widget', 'very-simple-event-list' ); ?></a>
	</h2>
	<form action="options.php" method="POST">
		<?php if( $active_tab == 'general_options' ) { ?>
			<?php settings_fields( 'vsel-general-options' ); ?>
			<?php do_settings_sections( 'vsel-general' ); ?>
		<?php } elseif( $active_tab == 'page_options' ) { ?>
			<?php settings_fields( 'vsel-page-options' ); ?>
			<?php do_settings_sections( 'vsel-page' ); ?>
		<?php } else { ?>
			<?php settings_fields( 'vsel-widget-options' ); ?>
			<?php do_settings_sections( 'vsel-widget' ); ?>
		<?php } ?>
		<?php submit_button(); ?>
	</form>
	<p><?php esc_attr_e( 'More customizations can be made by using (shortcode) attributes.', 'very-simple-event-list' ); ?></p>
	<?php $link_label = __( 'click here', 'very-simple-event-list' ); ?>
	<?php $link_wp = '<a href="https://wordpress.org/plugins/very-simple-event-list" target="_blank">'.$link_label.'</a>'; ?>
	<p><?php printf( esc_attr__( 'For info, available attributes and support %s.', 'very-simple-event-list' ), $link_wp ); ?></p>
</div>
<?php
}
