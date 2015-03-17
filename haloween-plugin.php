<?php

/*
Plugin Name: Haloween Plugin
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 1.0
Author: Aqib Gatoo
Author URI: http://aqibgatoo.com
License: GPLV2
*/

//call when plugin is activated
register_activation_hook( __FILE__, 'haloween_plugin_install' );

function haloween_plugin_install() {

	//setup default options values
	$hween_options_arr = array('currency_sign', '$', );

	//save our default option values
	update_option( 'haloween_options', $hween_options_arr );
}