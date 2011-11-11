//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

/* Begin Widget Class */
class Antelope_Widget extends WP_Widget {

	/* Widget setup  */
	function Antelope_Widget() {
	$widget_ops = array('classname' => 'agsml_widget', 'description' => __( 'Your Social Media Links', 'agsml') );

	// The actual widget code goes here
	parent::WP_Widget( false, $name = 'AG Social Media Links', $widget_ops );
	}
