add_action('admin_menu', 'agsml_create_menu');

function agsml_create_menu() {

	//create new top-level menu
	add_options_page('Antelope General Social Media Links', 'AG Social Media Links', 'manage_options', __FILE__, 'agsml_settings_page');
	add_filter( "plugin_action_links", "agsml_settings_link", 10, 2 );
	//call register settings function
	add_action( 'admin_init', 'agsml_register_settings' );
}


//add settings link to plugins list
function agsml_settings_link($links, $file) {
	static $this_plugin;
		if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);
		if ($file == $this_plugin){
	$settings_link = '<a href="options-general.php?page=AGSocialMedia/antelope-social-media-links.php">'.__("Settings", "agsml_social_media").'</a>';
		array_unshift($links, $settings_link);
		}
	return $links;
	}

function agsml_register_settings() {
	//register our settings
	register_setting( 'antelope_social_group', 'agsml_facebook' );
	register_setting( 'antelope_social_group', 'agsml_twitter' );
	register_setting( 'antelope_social_group', 'agsml_youtube' );	
	register_setting( 'antelope_social_group', 'agsml_linkedin' );
}
