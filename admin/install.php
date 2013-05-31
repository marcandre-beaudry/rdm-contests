<?php


function rdm_contests_create_tables() {
	global $wpdb;

	$rdm_contests_table = "CREATE TABLE " . $wpdb->prefix . "rdm_contest (
		ID BIGINT(20) NOT NULL AUTO_INCREMENT,
		date_begin DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
		date_finish DATETIME DEFAULT '0000-00-00 00:00:00' NOT NULL,
		contest_name TEXT NOT NULL,
		header_file TEXT NOT NULL,
		math_question VARCHAR(255) NOT NULL,
		table_name VARCHAR(255) NOT NULL,
		elements LONGTEXT NOT NULL,
		UNIQUE KEY id (id)
	);";

	require_once( ABSPATH . "wp-admin/includes/upgrade.php");
	dbDelta($rdm_contests_table);

}
