//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

function agsml_enqueue_styles() {
	
		// url to stylesheet
        $agsml_css_url	= WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)) .'/agsml-widget.css';
       
        //register and enqueue stylesheet
        wp_register_style('agsml_styles', $agsml_css_url);
        wp_enqueue_style( 'agsml_styles');
        
    }

add_action( 'wp_print_styles', 'agsml_enqueue_styles' );