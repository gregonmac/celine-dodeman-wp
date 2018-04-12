<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$screen = get_current_screen();
if ( !in_array( $screen->id, array( 'toplevel_page_es-view-subscribers', 'edit-es_template', 'email-subscribers_page_es-notification', 'email-subscribers_page_es-notification', 'email-subscribers_page_es-sendemail', 'email-subscribers_page_es-settings', 'email-subscribers_page_es-sentmail', 'email-subscribers_page_es-general-information' ), true ) ) return;

if( get_option('es_survey_done') == 1 ) return;

// 13th June 17 - 0.1
// updated on 5th July 17 - 0.2
// updated on 26th July 17 - 0.2
// updated on 21st Aug 17 - 0.3
// updated on 17th Nov 17 - 0.3 - moved to new file 
$es_data = es_cls_dbquery::es_survey_res();

// Check days passed from this update (v3.3.4)
$timezone_format = _x('Y-m-d', 'timezone date format');
$es_current_date = date_i18n($timezone_format);
$es_update_date = get_option('ig_es_update_v_3_3_4_date');

if ( $es_update_date === false ) {
	$es_update_date = $es_current_date;
	add_option( 'ig_es_update_v_3_3_4_date',$es_update_date );
}

$date_diff = floor( ( strtotime($es_current_date) - strtotime($es_update_date) ) / (3600 * 24) );
if($date_diff < 30) return;

?>
<style type="text/css">
	a.es-admin-btn {
		margin-left: 10px;
		padding: 4px 8px;
		position: relative;
		text-decoration: none;
		border: none;
		-webkit-border-radius: 2px;
		border-radius: 2px;
		background: #e0e0e0;
		text-shadow: none;
		font-weight: 600;
		font-size: 13px;
	}
	a.es-admin-btn-secondary {
		background: #fafafa;
		margin-left: 20px;
		font-weight: 400;
	}
	a.es-admin-btn:hover {
		color: #FFF;
		background-color: #363b3f;
	}
	.es-form-container .es-form-field {
		display: inline-block;
	}
	.es-form-container .es-form-field:not(:first-child) {
		margin-left: 4%;
	}
	.es-form-container {
		background-color: rgb(42, 2, 86) !important;
		border-radius: 0.618em;
		margin-top: 1%;
		padding: 1em 1em 0.5em 1em;
		box-shadow: 0 0 7px 0 rgba(0, 0, 0, .2);
		color: #FFF;
		font-size: 1.1em;
	}
	.es-form-wrapper {
		margin-bottom:0.4em;
	}
	.es-form-headline div.es-mainheadline {
		font-weight: bold;
		font-size: 1.618em;
		line-height: 1.8em;
	}
	.es-form-headline div.es-subheadline {
		padding-bottom: 0.4em;
		font-family: Georgia, Palatino, serif;
		font-size: 1.2em;
		color: #d4a000;
	}
	.es-survey-ques {
		font-size:1.1em;
		padding-bottom: 0.3em;
	}
	.es-form-field label {
		font-size:0.9em;
		margin-left: 0.2em;
	}
	.es-survey-next,.es-button {
		box-shadow: 0 1px 0 #03a025;
		font-weight: bold;
		height: 2em;
		line-height: 1em;
	}
	.es-survey-next,.es-button.primary {
		color: #FFFFFF!important;
		border-color: #a7c53c !important;
		background: #a7c53c !important;
		box-shadow: none;
		padding: 0 3.6em;
	}
	.es-heading {
		font-size: 1.218em;
		padding-bottom: 0.5em;
		padding-top: 0.5em;
		display: block;
		font-weight: bold;
		color: #ffd3a2;
	}
	.es-button.secondary {
		color: #545454!important;
		border-color: #d9dcda!important;
		background: rgba(243, 243, 243, 0.83) !important;
	}
	.es-loader-wrapper {
		position: absolute;
		display: none;
		left: 50%;
		margin-top: 0.4em;
		margin-left: 4em;
	}
	.es-loader-wrapper img {
		width: 60%;
	}
	.es-msg-wrap {
		display: none;
		text-align: center;
	}
	.es-msg-wrap .es-msg-text {
		padding: 1%;
		font-size: 2em;
	}
	.es-form-field.es-left {
		margin-bottom: 0.6em;
		width: 29%;
		display: inline-block;
		float: left;
	}
	.es-form-field.es-right {
		margin-left: 3%;
		width: 67%;
		display: inline-block;
	}
	.es-profile-txt:before {
		font-family: dashicons;
		content: "\f345";
		vertical-align: middle;
	}
	.es-profile-txt {
		font-size: 0.9em; 
	}
	.es-right-info .es-right {
		width: 50%;
		display: inline-block;
		float: right;
		margin-top: 2em;
	}
	.es-right-info .es-left {
		width: 50%;
		display: inline-block;
	}
	.es-form-wrapper form {
		margin-top: 0.6em;
	}
	.es-right-info label {
		padding: 0 0.5em 0 0;
		font-size: 0.8em;
		text-transform: uppercase;
		color: rgba(239, 239, 239, 0.98);
	}
	.es-list-item {
		margin-bottom: 0.9em;
		display: none;
		margin-top: 0.5em;
	}
	.es-rocket {
		position: absolute;
		top: 1.5em;
		right: 5%;
	}
	#es-no {
		box-shadow: none;
		cursor: pointer;
		color: #c3bfbf;
		text-decoration: underline;
		width: 100%;
		display: inline-block;
		margin: 0 auto;
		margin-left: 11em;
		margin-top: 0.2em;
	}
	.es-clearfix:after {
		content: ".";
		display: block;
		clear: both;
		visibility: hidden;
		line-height: 0;
		height: 0;
	}
	.es-survey-next {
		text-decoration: none;
		color: #fff;
		margin-top: -1em!important;
	}
</style>

<script type="text/javascript">
	jQuery(function() {
		jQuery('.es-list-item:nth-child(2)').show();
		jQuery('.es-list-item:nth-child(2)').addClass('current');
		jQuery('.es-form-container').on('click', '.es-survey-next', function(){
			jQuery('.es-list-item.current').hide();
			jQuery('.es-list-item.current').next().show().addClass('current');
			jQuery('.es-list-item.current').prev('.es-list-item').hide();
			if(jQuery('.es-list-item.current').is(':last-child')){
				jQuery('.es-survey-next').hide();

			}
		});

	});
</script>

<div class="es-form-container wrap">
	<div class="es-form-wrapper">
		<div class="es-form-headline">
			<div class="es-mainheadline"><?php echo __( 'Email Subscribers', ES_TDOMAIN ); ?> <u><?php echo __( 'is getting even better!', ES_TDOMAIN ); ?></u></div>
			<div class="es-subheadline"><?php echo __( 'But I need you to', ES_TDOMAIN ); ?> <strong><?php echo __( 'help me prioritize', ES_TDOMAIN ); ?></strong>! <?php echo __( 'Please send your response today.', ES_TDOMAIN ); ?></div>
		</div>
		<form name="es-survey-form" action="#" method="POST" accept-charset="utf-8">
			<div class="es-container-1 es-clearfix">	
				<div class="es-form-field es-left">
					<div class="es-profile">
						<div class="es-profile-info">
							<div class="es-heading"><?php echo __( "Here's how you use ES:",ES_TDOMAIN ); ?></div>
							<ul style="margin: 0 0.5em;">
								<li class="es-profile-txt">
									<?php 
										if( $es_data['post_notification'] > $es_data['newsletter'] ) {
											echo __( 'Post Notifications more often than Newsletter', ES_TDOMAIN );
										} else if($es_data['newsletter'] > $es_data['post_notification']){
											echo __( 'Newsletter more often than Post Notifications', ES_TDOMAIN );
										} else{
											echo __( 'Post Notification &amp; Newsletter equally', ES_TDOMAIN );
										}
									?>
								</li>
								<li class="es-profile-txt"> <?php echo __('Have ',ES_TDOMAIN ) .$es_data['es_active_subscribers'] . __(' Active Subscribers', ES_TDOMAIN); ?></li>
								<li class="es-profile-txt"> <?php echo __('Post ',ES_TDOMAIN ) .$es_data['es_avg_post_cnt'] . __(' blog per week', ES_TDOMAIN); ?></li>
								<li class="es-profile-txt">
									<?php 
										if( $es_data['cron'] > $es_data['immediately'] ) {
											echo __( 'Send emails via Cron', ES_TDOMAIN );
										} else {
											echo __( 'Send emails Immediately', ES_TDOMAIN );
										}
									?>
								</li>
								<li class="es-profile-txt">
									<?php 
										if ( $es_data['es_opt_in_type'] == 'Double Opt In' ) {
											echo __( 'Using Double Opt In', ES_TDOMAIN );
										} else {
											echo __( 'Using Single Opt In', ES_TDOMAIN );
										}
									?>
								</li>
								<input type="hidden" name="es_data[data][post_notification]" value="<?php echo $es_data['post_notification']; ?>">
								<input type="hidden" name="es_data[data][newsletter]" value="<?php echo $es_data['newsletter']; ?>">
								<input type="hidden" name="es_data[data][cron]" value="<?php echo $es_data['cron']; ?>">
								<input type="hidden" name="es_data[data][immediately]" value="<?php echo $es_data['immediately']; ?>">
								<input type="hidden" name="es_data[data][es_active_subscribers]" value="<?php echo $es_data['es_active_subscribers']; ?>">
								<input type="hidden" name="es_data[data][es_total_subscribers]" value="<?php echo $es_data['es_total_subscribers']; ?>">
								<input type="hidden" name="es_data[data][es_avg_post_cnt]" value="<?php echo $es_data['es_avg_post_cnt']; ?>">
								<input type="hidden" name="es_data[data][es_opt_in_type]" value="<?php echo $es_data['es_opt_in_type']; ?>">
								<input type="hidden" name="es_data[es-survey-version]" value="0.3">
							</ul>
						</div>
					</div>
				</div>
				<div class="es-form-field es-right">
					<div class="es-heading"><?php echo __( 'How soon do you want these new features?', ES_TDOMAIN ); ?></div>
					<div class="es-right-info">
						<div class="es-left">
							<ul style="margin-top:0;"><span class="es-counter">
								<li class="es-list-item"><?php echo __( 'Beautiful Email Designs', ES_TDOMAIN ); ?><br>
									<label title="days"><input checked="" type="radio" name="es_data[design_tmpl]" value="0"><?php echo __( 'Right now!', ES_TDOMAIN ); ?></label>
									<label title="days"><input type="radio" name="es_data[design_tmpl]" value="1"><?php echo __( 'Soon', ES_TDOMAIN ); ?></label>
									<label title="days"><input type="radio" name="es_data[design_tmpl]" value="2"><?php echo __( 'Later', ES_TDOMAIN ); ?></label>
								</li>
								<li class="es-list-item"><?php echo __( 'Spam Check, Scheduling... (Better Email Delivery)', ES_TDOMAIN); ?><br>
									<label title="days"><input type="radio" name="es_data[email_control]" value="0"><?php echo __( 'Right now!', ES_TDOMAIN ); ?></label>
									<label title="days"><input checked="" type="radio" name="es_data[email_control]" value="1"><?php echo __( 'Soon', ES_TDOMAIN ); ?></label>
									<label title="days"><input type="radio" name="es_data[email_control]" value="2"><?php echo __( 'Later', ES_TDOMAIN ); ?></label>
								</li>
								<li class="es-list-item"><?php echo __( 'Discard Fake / Bouncing Emails', ES_TDOMAIN); ?><br>
									<label title="days"><input type="radio" name="es_data[cleanup]" value="0"><?php echo __( 'Right now!', ES_TDOMAIN ); ?></label>
									<label title="days"><input checked="" type="radio" name="es_data[cleanup]" value="1"><?php echo __( 'Soon', ES_TDOMAIN ); ?></label>
									<label title="days"><input type="radio" name="es_data[cleanup]" value="2"><?php echo __( 'Later', ES_TDOMAIN ); ?></label>
								</li>
								<li class="es-list-item"><?php echo __( 'Advanced Reporting', ES_TDOMAIN ); ?><br>
									<label title="days"><input type="radio" name="es_data[report]" value="0"><?php echo __( 'Right now!', ES_TDOMAIN ); ?></label>
									<label title="days"><input type="radio" name="es_data[report]" value="1"><?php echo __( 'Soon', ES_TDOMAIN ); ?></label>
									<label title="days"><input checked="" type="radio" name="es_data[report]" value="2"><?php echo __( 'Later', ES_TDOMAIN ); ?></label>
								</li>
								<li class="es-list-item">
									<div>
										<input style="width: 70%;vertical-align: middle;display: inline-block;" placeholder="Enter your email to get early access" type="email" name="es_data[email]" value="<?php echo get_option( 'admin_email' ); ?>">
										<div class="" style="display: inline-block;margin-left: 0.4em;width: 23%;vertical-align: middle;">
											<input data-val="yes" type="submit" id="es-yes" value="Alright, Send It All" class="es-button button primary">
										</div>
										<div class="es-loader-wrapper"><img src="<?php echo ES_URL ?>images/spinner-2x.gif"></div>
										<a id="es-no" data-val="no" class=""><?php echo __( 'Nah, I don\'t like improvements', ES_TDOMAIN ); ?></a>
									</div>
								</li>
							</ul>
						</div>
						<div class="es-right">
							<a href="#" class="es-survey-next button primary"><?php echo __( 'Next', ES_TDOMAIN ); ?> </a>
						</div>
					</div>
				</div>
			</div>
		</form>
		<div class="es-rocket"><img src="<?php echo ES_URL?>images/es-growth-rocket.png"/></div>
	</div>
	<div class="es-msg-wrap">
		<div class="es-logo-wrapper"><img style="width:5%;" src="<?php echo ES_URL ?>images/es-logo-128x128.png"></div>
		<div class="es-msg-text es-yes"><?php echo __( 'Thank you!', ES_TDOMAIN ); ?></div>
		<div class="es-msg-text es-no"><?php echo __( 'No issues, have a nice day!', ES_TDOMAIN ); ?></div>
	</div>
</div>

<script type="text/javascript">
	jQuery(function () {
		jQuery("form[name=es-survey-form]").on('click','.es-button, #es-no',function(e){
			e.preventDefault();
			jQuery("form[name=es-survey-form]").find('.es-loader-wrapper').show();
			var params = jQuery("form[name=es-survey-form]").serializeArray();
			var that = this;
			params.push({name: 'btn-val', value: jQuery(this).data('val') });
			params.push({name: 'action', value: 'es_submit_survey' });
			jQuery.ajax({
					method: 'POST',
					type: 'text',
					url: "<?php echo admin_url( 'admin-ajax.php' ); ?>",
					data: params,
					success: function(response) {  
						jQuery("form[name=es-survey-form]").find('.es-loader-wrapper').hide();
						jQuery(".es-msg-wrap").show('slow');
						if( jQuery(that).attr('id') =='es-no'){
							jQuery(".es-msg-wrap .es-yes").hide();
						}else{
							jQuery(".es-msg-wrap .es-no").hide();
						}
						jQuery(".es-form-wrapper").hide('slow');
						setTimeout(function(){
								jQuery(".es-form-container").hide('slow');
						}, 5000);
					}
			});
		})

	});
</script>