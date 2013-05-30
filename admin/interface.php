<?php
/*
Admin interface function and hooks
*/

function rdm_contests_add_interface() {
	add_menu_page(
		"RDM Contests - Contests List",
		"RDM Contests",
		"manage_categories",
		"rdm-contests",
		"rdm_contests_get_listing_page"
	);
	add_submenu_page(
		"rdm-contests",
		"RDM Contests - Contests List",
		"Edit contests",
		"manage_categories",
		"rdm-contests-listing",
		"rdm_contests_get_listing_page"
	);
	add_submenu_page(
		"rdm-contests",
		"RDM Contests - Create contest"
		"Create new contest",
		"manage_categories",
		"rdm-contests-create",
		"rdm_contests_get_creation_page"
	);
	add_options_page(
		"RDM Contests - Settings",		// Page title
		"RDM Contests"				// Menu title
		"manage_options",			// Capability
		"rdm-contests-options",			// Handle
		"rdm_contests_get_settings_page"	// Function
	);
}
