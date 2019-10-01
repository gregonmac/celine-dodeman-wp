/* Very Simple Event List datepicker */

jQuery(document).ready(function ($) {
	$( "#vsel-start-date, #vsel-end-date" ).datepicker({
		dateFormat: objectL10n.dateFormat
	});
});
