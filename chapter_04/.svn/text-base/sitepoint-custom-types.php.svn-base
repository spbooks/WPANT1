<?php 
/*
Plugin Name: SitePoint Custom Conference Types
Plugin URI: http://sitepoint.com
Description: This is a plugin that performs the functions defined in the Post Types chapter of the WordPress Anthology.
Author: Raena Jackson Armitage
Version: 0.1
Author URI: http://sitepoint.com/
*/

add_action( 'init', 'conference_post_types_register' );

function conference_post_types_register() {
	register_post_type( 'conference_speaker',
		array(
			'labels' => array(
				'name' => __( 'Speakers' ),
				'singular_name' => __( 'Speaker' ),
				'add_new' => __( 'Add New Speaker' ),
				'add_new_item' => __( 'Add New Speaker' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Speaker' ),
				'new_item' => __( 'New Speaker' ),
				'view' => __( 'View Speaker' ),
				'view_item' => __( 'View Speaker' ),
				'search_items' => __( 'Search Speakers' ),
				'not_found' => __( 'No speakers' ),
				'not_found_in_trash' => __( 'No speakers in the Trash' ),
			),
			'public' => true,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'menu_position' => 30,
			'menu_icon' => plugins_url( 'icons/user_comment.png' , __FILE__ ),
			'query_var' => true,
			'can_export' => true,
			'has_archive' => 'speakers',
			'description' => "A conference speaker page is a page of information about a person who'll address this event.",
			'rewrite' => array('slug' => 'speaker'),
			'supports' => array( 'title', 'excerpt', 'editor', 'thumbnail' ),
			
		)
	);
	
	register_post_type( 'conference_session',
		array(
			'labels' => array(
				'name' => __( 'Sessions' ),
				'singular_name' => __( 'Session' ),
				'add_new' => __( 'Add New Session' ),
				'add_new_item' => __( 'Add New Session' ),
				'edit' => __( 'Edit' ),
				'edit_item' => __( 'Edit Session' ),
				'new_item' => __( 'New Session' ),
				'view' => __( 'View Session' ),
				'view_item' => __( 'View Session' ),
				'search_items' => __( 'Search Session' ),
				'not_found' => __( 'No sessions' ),
				'not_found_in_trash' => __( 'No sessions in the Trash' ),
			),
			'public' => true,
			'hierarchical' => false,
			'exclude_from_search' => false,
			'menu_position' => 20,
			'menu_icon' => plugins_url( 'icons/calendar_view_day.png' , __FILE__ ),
			'query_var' => true,
			'can_export' => true,
			'has_archive' => 'sessions',
			'description' => "A conference session is an event: a workshop, talk, panel, or get-together.",
			'rewrite' => array('slug' => 'session'),
			'supports' => array( 'title', 'excerpt', 'editor', 'thumbnail' )
		)
	);
	
}

add_action('init', 'create_conference_taxonomy', 0);

function create_conference_taxonomy() {

    $topiclabels = array(
      'name' => 'Topic',
      'singular_name' => 'topic',
      'search_items' =>  'Search topics',
      'popular_items' => 'Popular topics',
      'all_items' => 'All topics',
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => 'Edit topic', 
      'update_item' => 'Update topic',
      'add_new_item' => 'Add new topic',
      'new_item_name' => 'New topic name',
      'separate_items_with_commas' => 'Separate topics with commas',
      'add_or_remove_items' => 'Add or remove topics',
      'choose_from_most_used' => 'Choose from common topics',
      'menu_name' => 'Topics',
    ); 
    register_taxonomy( 'conference_topics', 'conference_session',
        array(
       'hierarchical' => false,
             'labels' => $topiclabels,
             'query_var' => true,
             'update_count_callback' => '_update_post_term_count',
             'rewrite' => array('slug' => 'topics' )
        )
    );
}



 add_action( 'admin_init', 'add_conference_speaker_box' );
 add_action( 'admin_init', 'conference_session_admin' );

 function add_conference_speaker_box(){
	add_meta_box("conference_speaker_info", "Speaker Details", "conference_speaker_fields", "conference_speaker", "normal", "core");
}

function conference_session_admin(){
	add_meta_box("conference_session_meta", "Session Details", "conference_session_meta", "conference_session", "normal", "core");
}

function conference_speaker_fields (){
	global $post;
	$custom = get_post_custom($post->ID);
	$conference_speaker_business = $custom["conference_speaker_business"][0];
	$conference_speaker_website_name = $custom["conference_speaker_website_name"][0];
	$conference_speaker_website_url = $custom["conference_speaker_website_url"][0];
	$conference_speaker_location = $custom["conference_speaker_location"][0];
	?>
	<p>
	<label>Employer/Business Name:</label><br />
	<input size="45" name="conference_speaker_business" value="<?php echo $conference_speaker_business; ?>" />
	</p>
	<p>
	<label>Website Name:</label><br />
	<input size="45" name="conference_speaker_website_name" value="<?php echo $conference_speaker_website_name; ?>" />
	</p>
	<p>
	<label>Website URL:</label><br />
	<input size="45" name="conference_speaker_website_url" value="<?php echo $conference_speaker_website_url; ?>" />
	</p>
	<p>
	<label>Location:</label><br />
	<input size="45" name="conference_speaker_location" value="<?php echo $conference_speaker_location; ?>" /></p>
	
	<?php
}


function conference_session_meta (){
	global $post;
	$custom = get_post_custom($post->ID);
	$conference_session_room = $custom["conference_session_room"][0];
	$conference_session_date = $custom["conference_session_date"][0];
	?>
	
	<p>
	<label>Room</label><br />
	<select name="conference_session_room">
	  <option value="Grand Ballroom">Grand Ballroom</option>
	  <option value="Plenary A">Plenary A</option>
	  <option value="Plenary B">Plenary B</option>
	  <option value="Theatre">Theatre</option>
	</select>
	</p>
	
	<p><label>Session date and time</label><br />
	<input size="45" id="conference_session_date" name="conference_session_date" value="<?php echo $conference_session_date; ?>" />
	</p>	
	
	<?php
}

add_action ('save_post', 'save_conference_speaker_attributes');
add_action ('save_post', 'save_conference_session_attributes');

add_action ('publish_post', 'save_conference_speaker_attributes');
add_action ('publish_post', 'save_conference_session_attributes');


function save_conference_speaker_attributes(){
    global $post;
    update_post_meta($post->ID, "conference_speaker_business", $_POST["conference_speaker_business"]);
    update_post_meta($post->ID, "conference_speaker_website_url", $_POST["conference_speaker_website_url"]);
    update_post_meta($post->ID, "conference_speaker_website_name", $_POST["conference_speaker_website_name"]);
    update_post_meta($post->ID, "conference_speaker_location", $_POST["conference_speaker_location"]);
}

function save_conference_session_attributes(){
    global $post;
    update_post_meta($post->ID, "conference_session_room", $_POST["conference_session_room"]);
    update_post_meta($post->ID, "conference_session_date", $_POST["conference_session_date"]);


}

function check_current_screen() {
    if( !is_admin() ) return;
    global $current_screen;
    print_r( $current_screen );
}
//add_action( 'admin_notices', 'check_current_screen' );


function conference_contextual_help() { 

	$editspeaker = "From this screen, you can view and update all your conference's speakers...";
	$addspeaker = "Enter the details of a new speaker...";
	
	$editsession = "View and edit your conference's sessions...";
	$addsession = "Add a new session ...";
	
	$editsessiontopics = "Add and edit topics...";
	
	add_contextual_help('edit-conference_speaker', $editspeaker); 
	add_contextual_help('conference_speaker', $addspeaker); 
	
	add_contextual_help('edit-conference_session', $editsession);
	add_contextual_help('conference_session', $addsession); 
	
	add_contextual_help('edit-conference_topics', $editsessiontopics); 

}

add_action('admin_init', 'conference_contextual_help');


?>