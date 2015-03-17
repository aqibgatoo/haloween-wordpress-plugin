<?php

/*
Plugin Name: Halloween Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Aqib Gatoo
Author URI: http://aqibgatoo.com
License: GPLV2
*/

//call when plugin is activated
register_activation_hook( __FILE__, 'halloween_plugin_install' );

function halloween_plugin_install() {

	//setup default options values
	$hween_options_arr = array('currency_sign', '$', );

	//save our default option values
	update_option( 'halloween_options', $hween_options_arr );
}

//Hook to initialize products
add_action( 'init', 'halloween_store_init' );

//initialize the halloween store
function halloween_store_init() {



}
