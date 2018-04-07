function ckSaveSlideshow() {
	if ( ckValidateData() === false ) {
		return;
	}

	if (jQuery('#ckslides').length && jQuery('#slides_sources').val() == 'slidemanager') {
		var slides_list = [];
		jQuery('#ckslides .ckslide').each(function(i, slide) {
			var slide_obj = {};
			slide = jQuery(slide);
			// slide_obj.imageurl = jQuery('.ckslideimgname', slide).val();
			slide_obj.imgname = jQuery('.ckslideimgname', slide).val();
			slide_obj.title = jQuery('.ckslidetitle', slide).val();
			slide_obj.title = slide_obj.title.replace(/"/g, "|dq|");
			slide_obj.description = jQuery('.ckslidedescription', slide).val();
			slide_obj.description = slide_obj.description.replace(/"/g, "|dq|");
//			slide_obj.imgthumb = jQuery('img', slide).src;
			slide_obj.imglink = jQuery('.ckslidelinktext', slide).val().replace(/"/g, "|dq|");
			slide_obj.imgtarget = jQuery('.ckslidetargettext', slide).val();
			slide_obj.imgalignment = jQuery('.ckslidedataalignmenttext', slide).val();
			slide_obj.imgvideo = jQuery('.ckslidevideotext', slide).val();
			// slide_obj.slideselect = jQuery('.ckslideselect', slide).val();
			// slide_obj.slidearticleid = jQuery('.ckslidearticleid', slide).val();
			// slide_obj.slidearticlename = jQuery('.ckslidearticlename', slide).val();
			slide_obj.imgtime = jQuery('.ckslideimgtime', slide).val();
			slides_list.push(slide_obj);
		});
		jQuery('#slideshow-ck-slides').val(JSON.stringify(slides_list).replace(/"/g, '|qq|'));
	}

	var params_obj = {};
	jQuery('input, select', jQuery('.saveparam')).each(function(i, param) {
		param = jQuery(param);
		if (param.attr('type') == 'radio') {
			params_obj[param.attr('data-name')] = jQuery('input[name="' + param.attr('name') + '"]:checked').val();
		} else {
			params_obj[param.attr('id')] = param.val();
		}
	});
	jQuery('#slideshow-ck-params').val(JSON.stringify(params_obj).replace(/"/g, '|qq|'));
	jQuery('#slideshowck-edit').submit();
}

function ckRemoveSlide(slide) {
	if (confirm('Remove this slide ?')) {
		slide.remove();
	}
}

function ckOpenMediaManager(button) {
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
		ckAddImageUrToSlide(button, attachment.url);
		// Restore the main post ID
		// wp.media.model.settings.post.id = wp_media_post_id;
	});

	// Finally, open the modal
	file_frame.open();
}

function ckCreateTabsInSlide(slide) {
	jQuery('div.tabck:not(.current)', slide).hide();
	jQuery('.menulinkck', slide).each(function(i, tab) {
		jQuery(tab).click(function() {
			jQuery('div.tabck', slide).hide();
			jQuery('.menulinkck', slide).removeClass('current');
			if (jQuery('#' + jQuery(tab).attr('tab')).length)
				jQuery('#' + jQuery(tab).attr('tab')).show();
			jQuery(this).addClass('current');
		});
	});
}

function ckShowSlidesSources() {
	jQuery('.slides_source').each(function(i, source) {
		if (jQuery('#slides_sources').val() == jQuery(source).attr('data-source')) {
			jQuery(source).show();
		} else {
			jQuery(source).hide();
		}
	});

}

function ckLoadDemoData() {
	if ( ckValidateData() === false ) {
		return;
	}

	if (!confirm('Warning, this will remove all your settings ! Do you want to continue ?')) {
		return;
	}

	jQuery('#slideshow-ck-slides').val(jQuery('#demo-slides').val());
	jQuery('#slideshow-ck-params').val(jQuery('#demo-params').val());
	jQuery('#slideshowck-edit').submit();
}

function ckValidateData() {
	if (jQuery('#post_title').val() == '') {
		alert('Please give a name to your slideshow');
		return false;
	}
	return true;
}

function ckImportSlidesFromFolder() {
	var folder = jQuery('#importfoldername').val();
	if (! folder) {
		alert('Please select a folder');
		return;
	}
	jQuery('#addslide_waiticon').addClass('ckwait_mini');
	var data = {
		action: 'slideshowck_importslidesfromfolder',
		number: jQuery('.ckslide').length,
		folder: folder
	};
	jQuery.post(ajaxurl, data, function(response) {
		if (response.substr(0, 5) == 'ERROR') {
			alert(response);
		} else {
			response = jQuery(response);
			jQuery('#ckslides').append(response);
			jQuery('#addslide_waiticon').removeClass('ckwait_mini');
			ckCreateTabsInSlide(response);
		}
	});
}

function ckShowBrowser(type, fieldid) {
	CKBox.open({handler: 'inline', content: 'ckbrowser'});
	var data = {
		action: 'slideshowck_load_browser',
		type: type,
		fieldid: fieldid
	};
	jQuery.post(ajaxurl, data, function(response) {
		jQuery('#ckbrowser').empty().append(response);
	});
}