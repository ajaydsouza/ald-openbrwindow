<?php

/*

Plugin Name: Open Browser Window
Version: 1.1
Plugin URI: http://www.ajaydsouza.com/wordpress/plugins/open-browser-window-plugin/
Description: Opens a new browser window using JavaScript. You have the option to choose the features as well as choose if you want it to be centered.
Author: Ajay D'Souza 
Author URI: http://www.ajaydsouza.com/

*/

if (!function_exists('get_settings')) {
	$ald_blog_url = $_SERVER['SCRIPT_URI'];
	$ald_blog_url = preg_replace("/wp-content\\/plugins\\/ald-openbrwindow\\.php$/", "", $ald_blog_url);
} else {
	$ald_blog_url = get_settings('siteurl');
}

function ald_openbrwindow()
{
	global $ald_blog_url;
?>

<script type="text/javascript" src="<?php echo $ald_blog_url?>/wp-content/plugins/ald-openbrwindow/ald-openbrwindow.js"></script>

<?php
}


//add action when the head is written
add_action('wp_head', 'ald_openbrwindow');

?>