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

	$elements = rdm_contests_get_elements_array();

?>
	<div class="wrap">
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>RDM Contests - Create new contest</h2>
		
		<table class="form-table">
			<tr valign="top">
				<th scope="row"> Contest name : </th>
				<td><input type="text" name="rdm_contests_name" id="rdm_contests_name" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"> Header image : </th>
				<td><input type="button" name="rdm_contests_upload_image" id="rdm_contests_upload_image" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"> Contest begining date : </th>
				<td><input type="text" class="rdm_contests_datepicker" name="rdm_contests_date_begin" id="rdm_contests_date_begin" /></td>
			</tr>
			<tr valign="top">
				<th scope="row"> Contest ending date : </th>
				<td><input type="text" class="rdm_contests_datepicker" name="rdm_contests_date_end" id="rdm_contests_date_end" /></td>
			</tr>
		</table>
		<select>
			<option value="">Choose a template</option>
			<option value="simple">Simple contest</option>
		</select> <input type="button" value="Load template" class="button_primary" id="rdm_contests_load_template" />
		<div style="clear:both"></div>
		<div style="width:45%;float:left;border-right:1px solid #aaaaaa;padding-right:15px;height:750px;">
		
			<?php
				foreach($elements as $element=>$properties) {

					echo '<div class="widget">
						<div class="widget-title"><h4 style="padding:5px">' . $element . '</h4></div>
					</div>';
				}
			?>	
		</div>
		<div style="width:45%;float:left;">
			&nbsp;	
		</div>
		<div style="clear:both;"></div>
		<input type="button" class="button_primary" value="Submit contest" onClick="location.href='http://en.louloumagazine.com/contests/contests-contests/loulou-ecco-contest/';" />
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
