<?php
defined('ABSPATH') or die;
//require_once( ABSPATH . 'wp-admin/admin.php' );

//Our class extends the WP_List_Table class, so we need to make sure that it's there
if (!class_exists('CK_List_Table')) {
	require_once( SLIDESHOWCK_PATH . '/cklibrary/class-ck-list-table.php' );
}

if (!class_exists('CK_Slideshow_List_Table')) {
	require_once( SLIDESHOWCK_PATH . '/includes/class-ck-slideshow-table.php' );
}

//Prepare Table of elements
$wp_list_table = new CK_Slideshow_List_Table();
$wp_list_table->prepare_items();
?>
<link rel="stylesheet" type="text/css" href="<?php echo SLIDESHOWCK_MEDIA_URL ?>/assets/slideshowck_edit.css" media="all" />
<div class="wrap">
	<?php if ($this->check_proaddon_version()) : ?><a href="http://www.wp-pluginsck.com" class="ckbutton" target="_blank"><img class="ckicon" src="<?php echo SLIDESHOWCK_MEDIA_URL ?>/images/exclamation.png" /><span style="color: red;"><?php _e('Pro Addon must be updated !','slideshow-ck') ?></span></a><?php endif; ?>
	<img src="<?php echo SLIDESHOWCK_MEDIA_URL ?>/images/logo_slideshowck_64.png" style="float:left; margin: 0px 5px;" />
	<h2>Slideshow CK
<?php
	echo ' <a href="admin.php?page=slideshowck_edit&id=0" class="add-new-h2">' . __('Add New', 'slideshow-ck') . '</a>';
?></h2>
	<div style="clear:both;"></div>
	<form id="movies-filter" method="get">
		<input type="hidden" name="page" value="<?php echo esc_attr( $_REQUEST['page'] ) ?>" />
		<input type="hidden" name="post_status" class="post_status_page" value="<?php echo!empty($_REQUEST['post_status']) ? esc_attr($_REQUEST['post_status']) : 'all'; ?>" />
		<input type="hidden" name="post_type" class="post_type_page" value="slideshowck" />
<?php
$wp_list_table->display()
?>
	</form>
	<?php echo $this->copyright() ?>
</div>