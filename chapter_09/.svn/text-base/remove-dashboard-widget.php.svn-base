<?php 

// Create the function to remove default Dashboard widgets
function peace_out_dashboard_widgets() {
	remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
} 

// Hook into the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'peace_out_dashboard_widgets' );