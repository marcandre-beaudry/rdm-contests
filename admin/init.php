<?php

require_once(RDM_CONTESTS_INCLUDES_PATH . "/functions.php");

if(!is_admin()) {
	return;
}

require_once(RDM_CONTESTS_ADMIN_PATH . "/interface.php");
require_once(RDM_CONTESTS_ADMIN_PATH . "/install.php");


add_action("admin_enqueue_scripts","rdm_contests_add_admin_scripts");
add_action("admin_menu","rdm_contests_add_interface");

register_activation_hook(RDM_CONTESTS_PATH . "/rdm-contests.php", "rdm_contests_activate");
