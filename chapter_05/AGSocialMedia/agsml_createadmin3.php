//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

function agsml_register_settings() {
	//register our settings
	register_setting( 'antelope_social_group', 'agsml_facebook' );
	register_setting( 'antelope_social_group', 'agsml_twitter' );
	register_setting( 'antelope_social_group', 'agsml_youtube' );	
	register_setting( 'antelope_social_group', 'agsml_linkedin' );
}
