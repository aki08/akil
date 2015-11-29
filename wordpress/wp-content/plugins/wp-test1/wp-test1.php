<?php

/*
Plugin Name: wp test1
Description: A plugin to test
plugin URI: http://#
Author: Akil
Author URI: http://a2zcart.site50.net
*/


function wp_test1_container(){
?>

<div id="main_container">




</div>	

<?php	
}
add_action('wp_footer','wp_test1_container');

/*
calling jquery and css
*/

function wp_test1_jss_css(){
	
	wp_enqueue_scripts('jquery');
	wp_enqueue_scripts('jquery-ui-dialog');
	wp_enqueue_scripts();	
	
}
add_action('wp_enqueue_scripts','wp_test1_js_css');
add_action('wp_enqueue_styles','wp_test1_js_css');








/*
create admin tab for plugin
*/
function wp_test1_admin_tab(){
	
		add_menu_page('wp test1','wp test1','manage_options','__FILE__','wp_test1_admin_page');
} 
add_action('admin_menu','wp_test1_admin_tab');

/*
create admin page
*/

function wp_test1_admin_page(){
ob_start();?>	

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>
	<h2>wp test1 Settings</h2>

	
</div>

<?php
echo ob_get_clean();
}
