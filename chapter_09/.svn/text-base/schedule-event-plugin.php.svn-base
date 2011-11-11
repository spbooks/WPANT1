<?php 

// Register our custom activation hook
register_activation_hook(__FILE__, 'roggae_activation');

// Add custom action hook and call our custom function
add_action('hourly_turning_event', 'hourly_earth_turn');

// Define the function associated with our custom action hook
function roggae_activation() {
	wp_schedule_event(time(), 'hourly', 'hourly_turning_event');
}

// Define our function that will do something on a scheduled basis
function hourly_earth_turn() {
	// code that turns the Earth every hour
}

// Clean scheduler upon plugin deactivation
register_deactivation_hook(__FILE__, 'roggae_deactivation');

function roggae_deactivation() {
	wp_clear_scheduled_hook('hourly_turning_event');
}