//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

//add settings link to plugins list
function agsml_settings_link($links, $file) {
	static $this_plugin;
		if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);
		if ($file == $this_plugin){
	$settings_link = '<a href="options-general.php?page=AGSocialMedia/antelope-social-media-links.php">'.__("Settings", "simple-social-sharing").'</a>';
		array_unshift($links, $settings_link);
		}
	return $links;
	}
