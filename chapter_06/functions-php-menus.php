<?php

if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'header_menu' => 'Header Menu',
		  'footer_menu' => 'Footer Menu',
		  'mobile_menu' => 'Mobile Menu'
		)
	);
}