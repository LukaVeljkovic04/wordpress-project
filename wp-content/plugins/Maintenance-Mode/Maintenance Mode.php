<?php
/*
Plugin Name: Maintenance Mode
Description: Activate maintenance mode to display a message to visitors.
Version: 1.0
Author: Epos
*/

// Function to display the maintenance message
function maintenance_mode_message() {
	if (!current_user_can('edit_themes') || !is_user_logged_in()) {
		// Change this message to your desired maintenance message
		$message = "<h1>Sajt je u izradi</h1><p>We're currently performing maintenance. Please check back soon.</p>";

		// Display the message and exit
		wp_die($message, 'Maintenance Mode');
	}
}

// Hook the maintenance_mode_message function to the 'wp' action
add_action('wp', 'maintenance_mode_message');