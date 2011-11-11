//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

add_action('admin_menu', 'agsml_create_menu');

function agsml_create_menu() {

	//create new top-level menu
	add_options_page('Antelope General Social Media Links', 'AG Social Media Links', 'manage_options', __FILE__, 'agsml_settings_page');
	add_filter( "plugin_action_links", "agsml_settings_link", 10, 2 );
	//call register settings function
	add_action( 'admin_init', 'agsml_register_settings' );
}