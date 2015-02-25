<?php
	$servername = "localhost";
	$username = "wis1-29";
	$password = "Proverbs356";
	$dbname = "wis1-29";

	//Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Check connection
	if($conn->connect_errno){
		echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $mysqli->connect_error;
	}
?>