<?php

if(!is_admin()) {
	return;
}

require_once(RDM_CONTESTS_ADMIN_PATH . "/interface.php");

add_action("admin_menu","rdm_contests_add_interface");
