<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "alphacrm";

// use mysqli function to connect to a database
$db = new mysqli($hostname, $username, $password);
$dbSuccess = true;


// check to make sure connection was established
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	$dbSuccess = false;
}

else {
	echo "MySQL Connected Successfully";
	$dbSuccess = true;
}


// Create database "alphacrm"
if ($dbSuccess) {
	$dbName = "alphacrm";
	$create_SQL = "Create DATABASE ".$dbName;

	if (mysqli_query($db, $create_SQL)) {
		echo "'CREATE DATABASE ".$database."' - Successful.";
	}

	else {
		echo "'CREATE DATABASE ".$database."' - FAILED.";
	}
}

?>