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
				<h4 class="text-center">Case Details</h4>
			</div>
			<div>
				<?php
					include('assets/config.php');

					//Display Case Details
					$sql = "SELECT * FROM case_detail";
					$result = $conn->query($sql);

					//Display Suspect
					$nameSql = "SELECT 
									case_detail.Crime_Case_ID, 
									suspect_data.SuspectID, 
									suspect_data.LastName, 
									suspect_data.FirstName, 
									case_detail.ReportingUnit, 
									case_detail.DateOfReporting, 
									case_detail.TimeOfReporting  
								FROM case_detail
								INNER JOIN suspect_data
								ON case_detail.SuspectID = suspect_data.SuspectID";
					$nameResult = $conn->query($nameSql);
								
						if ($nameResult->num_rows > 0) {
						    echo "<table class='table table-bordered'>
						    		<thead>
						    			<tr>
						    				<th>Crime Case Number</th>
						    				<th>SuspectID</th>
						    				<th>Suspect(s) name</th>
						    				<th>Reporting unit</th>
						    				<th>Date of reporting</th>
						    				<th>Time of reporting</th>
						    				<th>Update Case</th>
						    				<th>Delete Case</th>
						    			</tr>
						    		</thead>";
						    // output data of each row
						    while($row = $nameResult->fetch_assoc()) {
						        echo "<tbody>";
						        	echo"<tr>
						        			<td>".$row["Crime_Case_ID"]."</td>
						        			<td>".$row["SuspectID"]."</td>
						        			<td>".$row["LastName"].", ".$row["FirstName"]."</td>
						        			<td>".$row["ReportingUnit"]."</td>
						        			<td>".$row["DateOfReporting"]."</td>
						        			<td>".$row["TimeOfReporting"]."</td>";
								       echo'<td><a href="assets/caseUpdate.php?id='.$row["Crime_Case_ID"].'&s_id='.$row["SuspectID"].' "  class="btn btn-default">Edit</a></td>';
						        	   echo'<td><a href="assets/caseDelete.php?id='.$row["Crime_Case_ID"].' " class="btn btn-danger">Delete</a></td>';
						        	echo"</tr>
						        	</tbody>";
						    }
						    echo "</table>";
						} else {
						    echo "0 results";
						}

					$conn->close();
				?>
				<a class="addbtn btn btn-default" href="#" id="addCase">New Blotter Entry</a>
			</div>
			<div class="center formWrap" id="caseWrap">
		        <button type="button" class="btn btn-danger btn-sm addbtn">
		          <span class="glyphicon glyphicon-remove"></span> Close 
		        </button>
				<h2 class="text-center">Enter new case:</h2>
				<?php include 'assets/caseForm.php'; ?>
			</div>
		</section>

		<?php include 'assets/footer.php'; ?>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>