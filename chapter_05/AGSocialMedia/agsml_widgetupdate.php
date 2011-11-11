//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

/* Update the widget settings, just the title in this case  */
function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
return $instance;
}