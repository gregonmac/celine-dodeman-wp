<?php 

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>

<style type="text/css">
.es_offer {
	width: 93%;
	height: 12em;
	margin: 1em auto;
	text-align: center;
	background-color: #000;
	font-size: 1.2em;
	font-family: sans-serif;
	letter-spacing: 3px;
	line-height: 1.2em;
	padding: 2em;
}
.es_offer_heading {
	color: #64ddc1;
	padding: 1em 0;
	line-height: 1.2em;
	margin-bottom: 0.5em;
}
.es_main_heading {
	font-size: 1.5em;
	color: #FFFFFF;
	font-weight: 600;
	margin-bottom: 0.6em;
	line-height: 1.2em;
	position: relative;
}
.es_main_heading:after {
	content: '';
	position: absolute;
	width: 100%;
	left: 0;
	bottom: -0.6em;
	border-bottom: 1px solid #64ddc1;
}
.es_text {
	font-size: 0.9em;
	display: block;
}
.es_left_text {
	color: #FFFFFF;
	text-align: center;
	padding: 1em 0em;
}
.es_right_text {
	color: #FFFFFF;
	font-weight: 600;
	border: 1px solid #64ddc1;
	border-top: 0;
	max-width: 50%;
	padding: 10px 56px;
	width: auto;
	margin: 0;
	display: inline-block;
	text-decoration: none;
}
.es_right_text:hover, .es_right_text:active {
	color: #FFFFFF; 
}
</style>

<?php
$timezone_format = _x('Y-m-d', 'timezone date format');
$es_current_date = strtotime(date_i18n($timezone_format));
$es_offer1_start = strtotime("2017-11-17");
$es_offer1_end = strtotime("2017-11-19");
if( ($es_current_date >= $es_offer1_start) && ($es_current_date <= $es_offer1_end) ) {
	?>
	<div class="es_part1">
		<div class="es_offer">
			<div clas="es-right" style="width: 80%; display: inline-block;">
				<div class="es_offer_heading">Free Training Workshop: The Ultimate Trick To Build Mass Influence On Your Email List</div>
				<div class="es_main_heading">Training Part 1: Build Your Brand</div>
				<div class="es_text">
					<a href="https://www.icegram.com/the-mass-influence-workshop/build-your-brand/?utm_source=es&utm_medium=in_app&utm_campaign=bfcm2017" target="_blank" class="es_right_text">Take me to this training</a>
				</div>
			</div>
			<div class="es-left" style="float: right;width: 20%;display: inline-block;">
				<img style="width: 80%;" src="<?php echo ES_URL ?>images/part1-thumb-creating-your-brand.jpg">
				<div class="es_left_text">Note: This video will be taken down in the next 2 days</div>
			</div>
		</div>
	</div>
	<?php
}

$es_offer2_start = strtotime("2017-11-20");
$es_offer2_end = strtotime("2017-11-22");
if( ($es_current_date >= $es_offer2_start) && ($es_current_date <= $es_offer2_end) ) {
	?>
	<div class="es_part2">
		<div class="es_offer">
			<div clas="es-right" style="width: 80%; display: inline-block;">
				<div class="es_offer_heading">Free Training Workshop: The Ultimate Trick To Build Mass Influence On Your Email List</div>
				<div class="es_main_heading">Training Part 2: Amplify Influence Using Emails</div>
				<div class="es_text">
					<a href="https://www.icegram.com/the-mass-influence-workshop/amplify-influence-using-emails/?utm_source=es&utm_medium=in_app&utm_campaign=bfcm2017" target="_blank" class="es_right_text">Yes, watch the video</a>
				</div>
			</div>
			<div class="es-left" style="float: right;width: 20%;display: inline-block;">
				<img style="width:80%;" src="<?php echo ES_URL ?>images/part2-thumb-influence-with-email.jpg">
				<div class="es_left_text">Note: This video will be taken down in the next 2 days</div>
			</div>
		</div>
	</div>	
	<?php
}

$es_offer3_start = strtotime("2017-11-23");
$es_offer3_end = strtotime("2017-11-28");
if( ($es_current_date >= $es_offer3_start) && ($es_current_date <= $es_offer3_end) ) {
	?>
	<div class="es_part3">
		<div class="es_offer">
			<div clas="es-right" style="width: 80%; display: inline-block;">
				<div class="es_offer_heading">Free Training Workshop: The Ultimate Trick To Build Mass Influence On Your Email List</div>
				<div class="es_main_heading">Training Part 3: Fast Track Influence & Next Steps</div>
				<div class="es_text">
					<a href="https://www.icegram.com/the-mass-influence-workshop/fast-track-influence-and-next-steps/?utm_source=es&utm_medium=in_app&utm_campaign=bfcm2017" target="_blank" class="es_right_text">Yes, take me there</a>
				</div>
			</div>
			<div class="es-left" style="float: right;width: 20%;display: inline-block;">
				<img style="width:100%; float:right;" src="<?php echo ES_URL ?>images/part3-thumb-solution-to-email-problems.jpg">
				<div class="es_left_text">Note: This is a must watch video for everyone.</div>
			</div>
		</div>
	</div>
	<?php
}