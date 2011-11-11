<?php
    $gallery_shortcode_feature = '[gallery id="' . intval( $post->post_parent ) . '"]';
    print apply_filters( 'the_content', $gallery_shortcode_feature );
 ?>