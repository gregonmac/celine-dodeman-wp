/* Very Simple Event List datepicker */

jQuery(document).ready(function ($) {
	$( "#vsel-date, #vsel-start-date" ).datepicker({
		dateFormat: objectL10n.dateFormat
	});
});
