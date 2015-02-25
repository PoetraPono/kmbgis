<?php
	include('config.php');

	//Case Details Variables
	$crimeNum = $_POST['cc_ID'];
	$blotterNum = $_POST['b_No'];
	$r_unit = $_POST['r_unit'];
	$d_report = $_POST['d_report'];
	$t_report = $_POST['t_report'];

	//Insert Values
	$sql = "INSERT INTO case_detail(Crime_Case_ID,BlotterEntryNo,ReportingUnit,DateOfReporting,TimeOfReporting)
			VALUES('$crimeNum','$blotterNum','$r_unit','$d_report','$t_report')";
	
	if($conn->query($sql) === TRUE){
		echo "New suspect entered successfully";
	} else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Police Database System</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/main.css">
	</head>
	<body>
		<header>
	       	<div class="navbar-wrapper">
		        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
		          <div class="container">
		            <div class="navbar-header">
		              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		              </button>
		              <a class="navbar-brand" href="../index.php">GIS - Police Database System</a>
		            	<button type="button" id="login" class="btn btn-default navbar-btn">Sign in</button>
		            </div>
		            <div class="navbar-collapse collapse">
		              <ul class="nav navbar-nav">
		                <li><a href="../casedetails.php">Case Details</a></li>
		                <li><a href="../suspects.php">Suspects</a></li>
		                <li><a href="../offenses.php">Offenses</a></li>
		                <li><a href="../crimemap.php">Crime Map</a></li>      	              	
		              </ul>
		            </div>
		          </div>
		        </div>
		    </div>
		</header>

		<section class="container-fluid">
			<?php include '../assets/loginForm.php'; ?>
			<div class="jumbotron">
				<h3 class="text-center">Police Database System</h3>
				<h4 class="text-center">Case Details</h4>
			</div>
			<div>
				<?php
					include('../assets/config.php');

					//Display Suspects
					$sql = "SELECT * FROM case_detail";
					$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    echo "<table class='table table-bordered'>
						    		<thead>
						    			<tr>
						    				<th>Crime Case Number</th>
						    				<th>Blotter Entry Number</th>
						    				<th>Reporting unit</th>
						    				<th>Date of reporting</th>
						    				<th>Time of reporting</th>
						    				<th>Update Case</th>
						    				<th>Delete Case</th>
						    			</tr>
						    		</thead>";
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						        echo "<tbody>";
						        	echo"<tr>
						        			<td>".$row["Crime_Case_ID"]."</td>
						        			<td>".$row["BlotterEntryNo"]."</td>
						        			<td>".$row["ReportingUnit"]."</td>
						        			<td>".$row["DateOfReporting"]."</td>
						        			<td>".$row["TimeOfReporting"]."</td>";
								       echo'<td><a href="../assets/caseUpdate.php?id='.$row["Crime_Case_ID"].' " class="btn btn-default">Edit</a></td>';
						        	   echo'<td><a href="../assets/caseDelete.php?id='.$row["Crime_Case_ID"].' " class="btn btn-danger">Delete</a></td>';
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
				<?php include '../assets/caseForm.php'; ?>
			</div>
		</section>

		<?php include '../assets/footer.php'; ?>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/main.js"></script>
	</body>
</html>