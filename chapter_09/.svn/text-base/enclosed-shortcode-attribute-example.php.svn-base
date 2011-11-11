<?php

function readicculus( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'class' => 'helping-friendly-book',
      ), $atts ) );
 
   return '<span class="' . esc_attr($class) . '">' . $content . '</span>';
}

add_shortcode( 'helping-friendly-shortcode', 'readicculus' );
?>