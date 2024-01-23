<?php
	$hostname="localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "sparks";
	
	$conn = mysqli_connect($hostname, $dbuser, $dbpass, $dbname);
	

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}
	

?>