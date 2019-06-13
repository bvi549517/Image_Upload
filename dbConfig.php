<?php 
// Database configuration
$dbHost		="localhost";
$dbUsername	="root";
$dbPassword ="";
$dbName 	="codeworld";

// Craete database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//Check connection
if ($db->connect_error) {
	die("Connect failed: " . $db->connect_error);
}
 ?>
