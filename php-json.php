<?php

require_once('../wp-load.php');

global $wpdb;

$wpdb = new $wpdb("root", "", "2asir_test", "localhost");

$wpdb->show_errors();
$resultset = $wpdb->get_results("SELECT * FROM users");
header('Content-Type: appliication/json');
echo json_encode($resultset);

?>