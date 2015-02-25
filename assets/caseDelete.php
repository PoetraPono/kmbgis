<?php
	//include database connection
	include 'config.php';

	//$conn->real_escape_string() function helps us prevent attacks such as SQL injection
	$query="DELETE 
			FROM case_detail 
			WHERE Crime_Case_ID = ".$conn->real_escape_string($_REQUEST['id'])."";

	//execute query
	if($conn->query($query) ){
		//if successful deletion
		echo "User was deleted.";
		echo "<script>
              window.location='http://localhost/kmbgis/casedetails.php';
            </script>";
	}else{
		//if there's a database problem
		echo "Database Error: Unable to delete record.";
	}
	header('Location: ../casedetails.php');
	$conn->close();
?>