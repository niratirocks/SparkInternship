<?php
	
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "sparksbank";

	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>