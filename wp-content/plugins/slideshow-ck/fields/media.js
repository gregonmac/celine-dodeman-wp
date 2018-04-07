/**
 * @copyright	Copyright (C) 2016. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Plugins CK - Cédric KEIFLIN - http://www.wp-pluginsck.com
 */
 
function ckOpenMediaManager(button, siteurl) {
	button = jQuery(button);
	wp.media.model.settings.post.id = 0;
	var file_frame;

	if (file_frame) {
		// Set the post ID to what we want
		// file_frame.uploader.uploader.param( 'post_id', set_to_post_id );
		// Open frame
		file_frame.open();
		return;
	} else {
		// Set the wp.media post id so the uploader grabs the ID we want when initialised
		// wp.media.model.settings.post.id = set_to_post_id;
	}

	// Create the media frame.
	file_frame = wp.media.frames.file_frame = wp.media({
		title: jQuery(this).data('uploader_title'),
		button: {
			text: jQuery(this).data('uploader_button_text'),
		},
		multiple: false  // Set to true to allow multiple files to be selected
	});

	// When an image is selected, run a callback.
	file_frame.on('select', function() {
		// We set multiple to false so only get one image from the uploader
		attachment = file_frame.state().get('selection').first().toJSON();
		// Do something with attachment.id and/or attachment.url here
		url_relative = attachment.url.replace(siteurl, '');
		button.prev('input').val(url_relative);
		// Restore the main post ID
		// wp.media.model.settings.post.id = wp_media_post_id;
	});

	// Finally, open the modal
	file_frame.open();
}