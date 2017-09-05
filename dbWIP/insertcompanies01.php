<?php
// INSERTS company details into the table tCompany

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

	// Insert details for two companies.
	$company_SQLinsert = "INSERT INTO tCompany ( 
	preName, 
	Name,
	RegType,
	StreetA,
	StreetB,
	StreetC,
	Town,
	County,
	Postcode,
	COUNTRY
	)

	VALUES (
	'The',
	'Pie Company',
	'',
	'89 Gravy Road',
	'',
	'',
	'Pastryville',
	'NSW',
	'1297',
	'Australia'
	),

	(
	'',
	'TMIT World',
	'Limited',
	'42 Lily Close',
	'',
	'',
	'Bicester',
	'Oxfordshire',
	'OX26 BE5',
	'UK'
	)";

	if (mysqli_query($conn, $company_SQLinsert)) {
		echo "<br />INSERT into tCompany - Successful.";
	}

	else {
		echo "<br />INSERT into tCompany - Failure.";
	}

}

?>