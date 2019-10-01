<?php
// exit if uninstall is not called
if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}

$keep = get_option( 'vsel-setting' );
if ( $keep != 'yes' ) {
	// delete custom post meta
	delete_post_meta_by_key( 'event-start-date' );
	delete_post_meta_by_key( 'event-date' );
	delete_post_meta_by_key( 'event-time' );
	delete_post_meta_by_key( 'event-location' );
	delete_post_meta_by_key( 'event-link' );
	delete_post_meta_by_key( 'event-link-label' );
	delete_post_meta_by_key( 'event-link-target' );
	delete_post_meta_by_key( 'event-summary' );

	// deprecated custom post meta
	delete_post_meta_by_key( 'event-date-hide' );

	// delete option
	delete_option( 'widget_vsel_widget' );
	delete_option( 'vsel-setting' );
	delete_option( 'vsel-setting-1' );
	delete_option( 'vsel-setting-2' );
	delete_option( 'vsel-setting-3' );
	delete_option( 'vsel-setting-4' );
	delete_option( 'vsel-setting-5' );
	delete_option( 'vsel-setting-6' );
	delete_option( 'vsel-setting-7' );
	delete_option( 'vsel-setting-8' );
	delete_option( 'vsel-setting-9' );
	delete_option( 'vsel-setting-10' );
	delete_option( 'vsel-setting-11' );
	delete_option( 'vsel-setting-12' );
	delete_option( 'vsel-setting-13' );
	delete_option( 'vsel-setting-14' );
	delete_option( 'vsel-setting-15' );
	delete_option( 'vsel-setting-16' );
	delete_option( 'vsel-setting-17' );
	delete_option( 'vsel-setting-18' );
	delete_option( 'vsel-setting-19' );
	delete_option( 'vsel-setting-20' );
	delete_option( 'vsel-setting-21' );
	delete_option( 'vsel-setting-22' );
	delete_option( 'vsel-setting-23' );
	delete_option( 'vsel-setting-24' );
	delete_option( 'vsel-setting-25' );
	delete_option( 'vsel-setting-26' );
	delete_option( 'vsel-setting-27' );
	delete_option( 'vsel-setting-28' );
	delete_option( 'vsel-setting-29' );
	delete_option( 'vsel-setting-30' );
	delete_option( 'vsel-setting-31' );
	delete_option( 'vsel-setting-32' );
	delete_option( 'vsel-setting-33' );
	delete_option( 'vsel-setting-34' );
	delete_option( 'vsel-setting-35' );
	delete_option( 'vsel-setting-36' );
	delete_option( 'vsel-setting-37' );
	delete_option( 'vsel-setting-38' );
	delete_option( 'vsel-setting-39' );
	delete_option( 'vsel-setting-40' );
	delete_option( 'vsel-setting-41' );
	delete_option( 'vsel-setting-42' );
	delete_option( 'vsel-setting-43' );
	delete_option( 'vsel-setting-44' );
	delete_option( 'vsel-setting-45' );
	delete_option( 'vsel-setting-46' );
	delete_option( 'vsel-setting-47' );
	delete_option( 'vsel-setting-48' );
	delete_option( 'vsel-setting-49' );
	delete_option( 'vsel-setting-50' );
	delete_option( 'vsel-setting-51' );
	delete_option( 'vsel-setting-52' );

	// set global
	global $wpdb;

	// delete terms
	$wpdb->query( "
		DELETE FROM
		{$wpdb->terms}
		WHERE term_id IN
		( SELECT * FROM (
			SELECT {$wpdb->terms}.term_id
			FROM {$wpdb->terms}
			JOIN {$wpdb->term_taxonomy}
			ON {$wpdb->term_taxonomy}.term_id = {$wpdb->terms}.term_id
			WHERE taxonomy = 'event_cat'
		) as T
		);
 	" );

	// delete taxonomy
	$wpdb->query( "DELETE FROM {$wpdb->term_taxonomy} WHERE taxonomy = 'event_cat'" );

	// delete events
	$wpdb->query( "DELETE FROM {$wpdb->posts} WHERE post_type = 'event'" );
}
