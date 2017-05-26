<?php
//define constants for connection info
define("MYSQLUSER","root");
define("MYSQLPASS",ini_get("mysql.defaul_password"));
define("HOSTNAME","127.0.0.1");
define("MYSQLDB","blitz");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>

