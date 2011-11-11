<?php

// Associating the $object_type with an array of instances of custom post type
  register_taxonomy('location',array('property'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));

// Associating the $object_type with a single instance of a custom post type
  register_taxonomy('agent','property',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'agent' ),
  ));