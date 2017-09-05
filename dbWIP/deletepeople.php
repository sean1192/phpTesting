<?php

// Deletes people from tPeople table
$hostname = "localhost";
$username = "root";
$password = "";
$database = "alphacrm";

// use mysqli function to connect to a database
$conn = mysqli_connect($hostname, $username, $password, $database);
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

	$people_SQLdelete = "DELETE FROM tPerson WHERE CompanyID > '200'";

	// If BINARY not specified, will remove all instances and cases of the string
	//$people_SQLdelete = "DELETE FROM tPerson WHERE BINARY LastName = 'Bloggs'";


	// Check to see if this worked
	if (mysqli_query($conn, $people_SQLdelete)) {
		echo "<br />DELETE tPerson - Successful.";
	}

	else {
		echo "<br />DELETE tPerson - Failure.";
	}
}

?>