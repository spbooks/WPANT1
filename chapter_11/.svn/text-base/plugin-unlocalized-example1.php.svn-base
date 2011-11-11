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
	add_action( 'admin_menu', 'olin_osp_menu' );
}

function olin_osp_menu() {
	add_options_page( 'Our Sample Plugin Options', 'Our Sample Plugin', 'manage_options', 'our-sample-plugin', 'olin_osp_settings' );
}

function olin_osp_settings() {
	?>
	<div class='wrapper'>
		<h1>Our Sample Plugin Settings</h1>
		<!-- Imagine that there is some really exciting functionality happening here -->
	</div>
	<?php
}
?>