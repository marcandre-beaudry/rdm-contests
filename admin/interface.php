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
		"rdm_contests_get_edit_page"
	);
	add_submenu_page(
		"rdm-contests",
		"RDM Contests - Contests List",
		"Edit contests",
		"manage_categories",
		"rdm-contests",
		"rdm_contests_get_edit_page"
	);
	add_submenu_page(
		"rdm-contests",
		"RDM Contests - Create contest",
		"Create new contest",
		"manage_categories",
		"rdm-contests-create",
		"rdm_contests_get_creation_page"
	);
	add_options_page(
		"RDM Contests - Settings",
		"RDM Contests",
		"manage_options",
		"rdm-contests-options",	
		"rdm_contests_get_settings_page"
	);
}

function rdm_contests_get_edit_page() {
?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>RDM Contests - Edit contests</h2>
			
	</div>
<?php 
}

function rdm_contests_get_creation_page() {
?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>RDM Contests - Create new contest</h2>
		
		
	
	</div>
<?php 
}

function rdm_contests_get_settings_page() {
?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>RDM Contests - Settings</h2>

				
			
	</div>
<?php 
}
