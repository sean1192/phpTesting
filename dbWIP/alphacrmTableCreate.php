<?php
// Creates tables tCompany and tPerson in database 'alphacrm'

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

	// SQL script to create table tCompany
	$createCoyTable_SQL = "CREATE TABLE tCompany ( 
	ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	preName VARCHAR( 50 ) ,
	Name VARCHAR( 250 ) NOT NULL, 
	RegType VARCHAR( 50 )  NULL,
	StreetA VARCHAR( 150 )  NULL,
	StreetB VARCHAR( 150 )  NULL,
	StreetC VARCHAR( 150 )  NULL,
	Town VARCHAR( 150 )  NULL,
	County VARCHAR( 150 )  NULL,
	Postcode VARCHAR( 50 )  NULL,
	COUNTRY VARCHAR( 250 ) NOT NULL 
	)";

	if (mysqli_query($conn, $createCoyTable_SQL)) {
		echo "'CREATE TABLE tCompany' - Successful.";
	}

	// SQL script to create table tPerson
	$createPersonTable_SQL = "CREATE TABLE tPerson (
	ID INT( 11 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	Salutation VARCHAR( 20 ) ,
	FirstName VARCHAR( 50 ) ,
	LastName VARCHAR( 50 ) NOT NULL,
	CompanyID INT( 11 ) NOT NULL
	)";

	if (mysqli_query($conn, $createPersonTable_SQL)) {
		echo "'CREATE TABLE tPerson' - Successful.";
	}


}

?>