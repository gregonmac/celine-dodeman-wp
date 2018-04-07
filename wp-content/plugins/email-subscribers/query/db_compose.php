<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

class es_cls_compose {
	public static function es_template_select($id = 0) {

		// global $wpdb;

		$arrRes = array();
		//$sSql = "SELECT * FROM `".$wpdb->prefix."es_templatetable` where 1=1";
		if($id > 0) {
			// $sSql = $sSql . " and es_templ_id=".$id;
			// $arrRes = $wpdb->get_row($sSql, ARRAY_A);
			// if(empty($arrRes)){
				$es_tmpl_post = get_post($id, ARRAY_A);
				$arrRes = array(
					'es_templ_id' => $es_tmpl_post['ID'],
					'es_templ_heading' => $es_tmpl_post['post_title'],
					'es_templ_body' => $es_tmpl_post['post_content'],
					'es_templ_status' => $es_tmpl_post['post_status'],
					'es_email_type' => get_post_meta($id, 'es_template_type', true)
				);
			// }
		} else{

		} 
		// else {
		// 	$arrRes = $wpdb->get_results($sSql, ARRAY_A);
		// }

		
		return $arrRes;
	}

	public static function es_template_select_type($type = "Newsletter") {

		//global $wpdb;

		$arrRes = array();

		// $sSql = $wpdb->prepare("SELECT es_templ_id,es_templ_heading FROM `".$wpdb->prefix."es_templatetable` where  es_email_type = %s",  array($type));
		// $arrRes = $wpdb->get_results($sSql, ARRAY_A);
		// new custom post type push
		$es_template = get_posts(array(
							'post_type'			=> array('es_template'),
							'post_status'	 	=> 'publish',
							'posts_per_page' 	=> -1,
							// 'post__in' 			=> array( 0, $term ),
							'fields'			=> 'ids',
							'post_status'	 	=> 'publish',
						    'meta_query' => array(
						      array(
						         'key'     => 'es_template_type',
						         'value'   => $type,
						         'compare' => '='
						      )
						    )
						));
		foreach ($es_template as $id) {
			$es_post_thumbnail = get_the_post_thumbnail( $id );
			$es_templ_thumbnail = ( !empty( $es_post_thumbnail ) ) ? get_the_post_thumbnail( $id, array('200','200') ) : '<img src="'.ES_URL.'images/envelope.png" />';
			$tmpl = array(
					'es_templ_id' => $id,
					'es_templ_heading' =>  get_the_title($id),
					'es_templ_thumbnail' => $es_templ_thumbnail
				);
			$arrRes[] = $tmpl;
		}
		return $arrRes;
	}

	public static function es_template_count($id = 0) {

		global $wpdb;

		$result = '0';

		if($id > 0) {
			$sSql = $wpdb->prepare("SELECT COUNT(*) AS `count` FROM `".$wpdb->prefix."es_templatetable` WHERE `es_templ_id` = %d", array($id));
		} else {
			$sSql = "SELECT COUNT(*) AS `count` FROM `".$wpdb->prefix."es_templatetable`";
		}
		$result = $wpdb->get_var($sSql);

		return $result;
	}

	public static function es_template_delete($id = 0) {

		global $wpdb;

		$sSql = $wpdb->prepare("DELETE FROM `".$wpdb->prefix."es_templatetable` WHERE `es_templ_id` = %d LIMIT 1", $id);
		$wpdb->query($sSql);

		return true;
	}

	public static function es_template_ins($data = array(), $action = "insert") {
		global $wpdb;
		
		if( $action == "insert" ) {

			// to set es_templ_slug as empty for all newly created emails
			// $data["es_templ_slug"] = (isset($data["es_templ_slug"])) ? $data["es_templ_slug"] : NULL;

			// $sSql = "INSERT INTO `".$wpdb->prefix."es_templatetable` (`es_templ_heading`,
			// `es_templ_body`, `es_templ_status`, `es_email_type`, `es_templ_slug`)
			// VALUES('". trim($data["es_templ_heading"]) ."', '". trim($data["es_templ_body"])."', '". trim($data["es_templ_status"])."', '". trim($data["es_email_type"])."', NULLIF('". $data["es_templ_slug"]."', '') )";
			$col = "(";
			$fields = "VALUES(";
			foreach ($data as $key => $value) {
				$col .= "`".$key ."`,";
				$fields .= (is_numeric($value))  ? $value ."," : "'". trim($value) ."',"; 
			}
			$col = rtrim($col,',');
			$fields = rtrim($fields,',');
			$col .= ")";
			$fields .= ")";
			$sSql = "INSERT INTO `".$wpdb->prefix."es_templatetable` ".$col." ".$fields;
		} elseif( $action == "update" ) {
			$sSql = $wpdb->prepare("UPDATE `".$wpdb->prefix."es_templatetable` SET `es_templ_heading` = %s, `es_templ_body` = %s, 
			`es_templ_status` = %s, `es_email_type` = %s WHERE es_templ_id = %d LIMIT 1", 
			array($data["es_templ_heading"], $data["es_templ_body"], $data["es_templ_status"], $data["es_email_type"], $data["es_templ_id"]));
		}

		$wpdb->query($sSql);

		return true;
	}

	public static function es_template_getimage($postid=0, $size='thumbnail', $attributes='') {

		if ($images = get_children(array(
			'post_parent' => $postid,
			'post_type' => 'attachment',
			'numberposts' => 1,
			'post_mime_type' => 'image',)))
				foreach($images as $image) {
					$attachment = wp_get_attachment_image_src($image->ID, $size);
					return "<img src='". $attachment[0] . "' " . $attributes . " />";
				}

	}
}