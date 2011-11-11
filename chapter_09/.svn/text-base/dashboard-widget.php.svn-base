<?php 

// Create the function to output the contents of our Dashboard Widget
function underoverground() {
	// Display whatever it is you want to show
	echo "Don't forget to turn the Earth so both sides get their share of darkness and of light.";
} 

// Create the function used in the action hook
function add_underoverground() {
	wp_add_dashboard_widget('not_so_fast', 'Not So Fast', 'underoverground');	
} 

// Hook into the 'wp_dashboard_setup' 
add_action('wp_dashboard_setup', 'add_underoverground' );