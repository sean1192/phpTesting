<?php
// Updates values of field COUNTRY in table tCompany to 'United Kingdom' 
// WHERE they have the value 'UK'

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
	
	// Update the table tCompany
	$company_SQLupdate = "UPDATE tCompany SET COUNTRY = 'United Kingdom' WHERE COUNTRY = 'UK' ";

	// Check to see if this worked
	if (mysqli_query($conn, $company_SQLupdate)) {
		echo "<br />UPDATE tCompany.COUNTRY - Successful.";
	}

	else {
		echo "<br />UPDATE tCompany.COUNTRY - Failure.";
	}

}

?>