<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Police Database System</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<?php include 'assets/header.php'; ?>

		<section class="container-fluid">
			<?php include 'assets/loginForm.php'; ?>
			<div class="jumbotron">
				<h3 class="text-center">Police Database System</h3>
				<h4 class="text-center">Offenders List</h4>
			</div>
			<div class="table-responsive">
				<?php
					//Database connection
					include('assets/config.php');

					//query all records from the database
					$query = "SELECT * FROM suspect_data";

					//execute the query
					$result = $conn->query($query);

					//Get number of rows returned
					$num_results = $result->num_rows;
					
						//if theres already a database record
						if ($num_results > 0) {
						    //Start Table
						    echo "<table name='s_table' class='table table-bordered'>";
						    //Table Heading
						    echo "	<thead>
						    			<tr>
						    				<th>SuspectID</th>
						    				<th>Status</th>
						    				<th>Last Name</th>
						    				<th>First Name</th>
						    				<th>Middle Name</th>
						    				<th>House #</th>
						    				<th>Street</th>
						    				<th>City</th>
						    				<th>Birthdate</th>
						    				<th>Birthplace</th>
						    				<th>Nationality</th>
						    				<th>Gender</th>
						    				<th>Height</th>
						    				<th>Weight</th>
						    				<th>Edit</th>
						    				<th>Delete</th>
						    			</tr>
						    		</thead>";

						    // output data of each row
						    while($row = $result->fetch_assoc()) {

						    	//This will make $row['firstname '] to just $firstname only
						    	extract($row);

						        echo "<tbody>";
						        echo "<tr>";
						        echo "<td>{$SuspectID}</td>";
						        echo "<td>{$Status}</td>";
						        echo "<td>{$LastName}</td>";
						        echo "<td>{$FirstName}</td>";
						        echo "<td>{$MiddleName}</td>";
						        echo "<td>{$HouseNumber}</td>";
						        echo "<td>{$StreetName}</td>";
						        echo "<td>{$City}</td>";
						        echo "<td>{$BirthDate}</td>";
						        echo "<td>{$BirthPlace}</td>";
						        echo "<td>{$Nationality}</td>";
						        echo "<td>{$Gender}</td>";
						        echo "<td>{$Height}</td>";
						        echo "<td>{$Weight}</td>";
								echo "<td><a href='assets/suspectUpdate.php?id={$SuspectID}' class='btn btn-default'>Edit</a></td>";
						        echo "<td><a href='#' onclick='delete_user({$SuspectID});' class='btn btn-danger'>Delete</a></td>";
						        echo "</tr>";
						        echo "</tbody>";
						    }
						    echo "</table>";
						} else {

							//If database is empty
						    echo "No records found.";
						}

					//Disconnect from database
					$result->free();
					$conn->close();
				?>
				<a class="addbtn btn btn-default" href="#" id="addSuspect">Add Suspect</a>
			</div>
			<div class="center formWrap" id="susWrap">
		        <button type="button" class="btn btn-danger btn-sm addbtn">
		          <span class="glyphicon glyphicon-remove"></span> Close 
		        </button>
				<h2 class="text-center">Enter Suspect Profile:</h2>
				<?php include 'assets/suspectForm.php'; ?>
			</div>
		</section>

		<?php include 'assets/footer.php'; ?>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/main.js"></script>
		<script type='text/javascript'>
			function delete_user( id ){

				//prompt the user
				var answer = confirm('Are you sure?');

				if ( answer ){ //if user clicked ok
					//redirect to url with action as delete and id of the record to be deleted
					window.location = 'assets/suspectDelete.php?id=' + id;
				}
			}
		</script>
	</body>
</html>