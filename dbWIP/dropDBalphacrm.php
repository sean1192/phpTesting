<?php

// create text variable called 'hostname', and set to value "localhost" (would be a domain name otherwise)
$hostname = "localhost";
$username = "root";
$password = "";
$database = "alphacrm";

// use mysqli function to connect to a database
$db = new mysqli($hostname, $username, $password, $database);
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


if ($dbSuccess) {

	$drop_SQL = "DROP DATABASE ".$database;

	if (mysqli_query($db, $drop_SQL)) {
		echo "'DROP DATABASE ".$database."' - Successful.";
	}

	else {
		echo "'DROP DATABASE ".$database."' - FAILED.";
	}

}



?>