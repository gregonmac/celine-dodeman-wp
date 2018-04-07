/**
 * @copyright	Copyright (C) 2016. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * @author		Plugins CK - Cédric KEIFLIN - http://www.wp-pluginsck.com
 */
 
function ckInitColorpicker() {
	var myOptions = {
		// you can declare a default color here,
		// or in the data-default-color attribute on the input
		defaultColor: true,
		// a callback to fire whenever the color changes to a valid color
		change: function(event, ui){
		},
		// a callback to fire when the input is emptied or an invalid color
		clear: function() {},
		// hide the color picker controls on load
		hide: true,
		// show a group of common colors beneath the square
		// or, supply an array of colors to customize further
		palettes: true
	};

	jQuery('.ck-color-picker').wpColorPicker(myOptions);
}

jQuery(document).ready(function(){
	ckInitColorpicker();
});