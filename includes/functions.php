<?php

function rdm_contests_get_elements_array() {

	$provines_code = rdm_contests_get_provinces_code();

	$elements = array();

	$elements[] = array(
		"first_name" => array("html" => "<label for='first_name'>First name: </label><input type='text' id='first_name' name='first_name' value='' />"),
		"last_name" => array("html" => "<label for='last_name'>Last name: </label><input type='text' id='last_name' name='last_name' value='' />"),
		"address" => array("html" => "<label for='address'>Address:</label>  <input type='text' id='address' name='address' value='' />"),
		"city" => array("html" => "<label for='city'>City:</label> <input type='text' id='city' name='city' value='' />"),
		"province" => array("html" => "<input type='text' id='province' name='province' value='' />"),
		"postal_code" => array("html" => $provinces_code),
		"phone_number" => array("html" => "<label for='phone_number'>Phone number: </label><input type='text' id='phone_number' name='phone_number' value='' />"),
		"email" => array("html" => "<label for='email'>Email: </label><input type='text' id='email' name='email' value='' /> <label for='confirm_email'>Confirm email address:</label> <br /><input type='text' id='confirm_email' name='confirm_email' value='' /> "),
		"math_question" => array("html" => "<label for='stq'>Skill testing question:</label> <%% MATH_QUESTION_STRING %%> <input type='text' id='stq' name='stq' value='' />"),
		"age_validation" => array("html" => "<input type='checkbox' id='age_validation' name='age_validation' value='' /> I certify that I meet the minimum age requirement to take part in this contest, as specified in the rules and regulation"),
		"rule_agreement" => array("html" => "<input type='checkbox' id='rule_agreement' name='rule_agreement' value='' /> I agree to the terms of the <a href='<%% RULE_FILE_URL %%>' target='_blank'>rules & regulations</a>"),
		"subscribe_offer" => array("html" => "<label for='stq'>Skill testing question:</label> <%% MATH_QUESTION_STRING %%> <input type='text' id='stq' name='stq' value='' />"),
		"captcha" => array("html" => "<label for='stq'>Skill testing question:</label> <%% MATH_QUESTION_STRING %%> <input type='text' id='stq' name='stq' value='' />"),
		"perm_nl" => array("html" => "<label for='stq'>Skill testing question:</label> <%% MATH_QUESTION_STRING %%> <input type='text' id='stq' name='stq' value='' />"),
		"perm_3rd_party" => array("html" => "<label for='stq'>Skill testing question:</label> <%% MATH_QUESTION_STRING %%> <input type='text' id='stq' name='stq' value='' />")
	);
	
	return $elements;
}

function rdm_contests_get_provinces_code() {

	$provinces = "<label for='province'>Province</label>
			<select name='province' size='1'>
				<option selected='selected' value=''>Select a province</option>
				<option value='AB'>Alberta</option>
				<option value='BC'>British Columbia</option>
				<option value='MB'>Manitoba</option>
				<option value='NB'>New Brunswick</option>
				<option value='NF'>Newfoundland</option>
				<option value='NT'>Northwest Territory</option>
				<option value='NS'>Nova Scotia</option>
				<option value='NU'>Nunavut</option>
				<option value='ON'>Ontario</option>
				<option value='PE'>Prince Edward Island</option>
				<option value='QC'>Quebec</option>
				<option value='SK'>Saskatchewan</option>
				<option value='YK'>Yukon</option>
			</select>";
	return $provinces;
}

function brand_field_callback() {
    $setting = esc_attr( get_option( 'brand_name' ) );
    echo "<input type='text' name='brand_name' value='$setting' />";
}
