<?php
/*
Plugin Name: Our Sample Plugin
Plugin URI: http://www.sitepoint.com/our-sample-plugin
Description: Sample localization code demonstration
Version: 1
Author: Mick Olinik
Author URI: http://www.sitepoint.com
License: GPL2
*/ 

add_action( 'init', 'olin_osp_init' );
function olin_osp_init() {
	add_action( 'admin_menu', 'olin_osp_init' );
	load_plugin_textdomain( 'our-very-unique-domain', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
} 

function olin_osp_menu() {
	add_options_page( sprintf( __( '%s Options', 'our-very-unique-domain' ), 'Our Sample Plugin' ), 'Our Sample Plugin', 'manage_options', 'our-sample-plugin', 'olin_osp_settings' );
} 

function olin_osp_settings() {
	?>
	<div class='wrapper'>
		<h1><?php _e( 'Our Sample Plugin Settings', 'our-very-unique-domain' ); ?></h1>
		<!-- Imagine that there is some really exciting functionality happening here -->		
	</div>
	<?php
} 
?>