<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

$username = "mini";                  // Use your username
$password = "mini";             // and your password
$database = "localhost/XE";   // and the connect string to connect to your database


$c = oci_connect($username, $password, $database);
if (!$c) {
    $m = oci_error();
    trigger_error('Could not connect to database: '. $m['message'], E_USER_ERROR);
}



 
?>
