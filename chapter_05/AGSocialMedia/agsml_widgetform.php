//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

//form to display in widget settings.  Allows user to set title of widget.
function form( $instance ) {
	$title = esc_attr($instance['title']);
?>
<p>
  <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
  <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>
<?php 
}
}