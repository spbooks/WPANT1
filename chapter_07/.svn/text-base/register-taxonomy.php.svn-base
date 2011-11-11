<?php
//hook into the init action and call create_property_taxonomies
add_action( 'init', 'create_property_taxonomies', 0 );

//create two taxonomies, locations and sales agents
function create_property_taxonomies() 
{
  // Add new taxonomy locations, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'Location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => __( 'Parent Location' ),
    'parent_item_colon' => __( 'Parent Location:' ),
    'edit_item' => __( 'Edit Location' ), 
    'update_item' => __( 'Update Location' ),
    'add_new_item' => __( 'Add New Location' ),
    'new_item_name' => __( 'New Location Name' ),
    'menu_name' => __( 'Locations' ),
  ); 	

  register_taxonomy('location', post, array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'location' ),
  ));

  // Add new taxonomy for sales agents, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Sales Agents', 'taxonomy general name' ),
    'singular_name' => _x( 'Sales Agent', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Sales Agents' ),
    'popular_items' => __( 'Prolific Agents' ),
    'all_items' => __( 'All Sales Agents' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Sales Agent' ), 
    'update_item' => __( 'Update Sales Agent' ),
    'add_new_item' => __( 'Add New Sales Agent' ),
    'new_item_name' => __( 'New Sales Agent' ),
    'separate_items_with_commas' => __( 'Separate agents with commas' ),
    'add_or_remove_items' => __( 'Add or remove agents' ),
    'choose_from_most_used' => __( 'Choose from the most prolific sales agents' ),
    'menu_name' => __( 'Sales Agents' ),
  ); 

  register_taxonomy('agent','post',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'agent' ),
  ));
}
?>