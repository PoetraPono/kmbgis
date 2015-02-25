<?php
  include('config.php');

  //check any user action
  $action = isset( $_POST['action'] ) ? $_POST['action'] : "";
  
  $cc_id = '$conn->real_escape_string($_POST['cc_ID'])';
  
  //if the user hit the submit button on Case Detail
  if($action == "Add"){
      //Inserting Values
      //$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
      $query = "insert into suspect_data 
                set 
                  Status ='".$conn->real_escape_string($_POST['s_status'])."',
                  LastName ='".$conn->real_escape_string($_POST['s_lName'])."',
                  FirstName ='".$conn->real_escape_string($_POST['s_fName'])."',
                  MiddleName ='".$conn->real_escape_string($_POST['s_mName'])."',
                  HouseNumber ='".$conn->real_escape_string($_POST['s_houseNum'])."',
                  StreetName ='".$conn->real_escape_string($_POST['s_streetName'])."',
                  City ='".$conn->real_escape_string($_POST['s_city'])."',
                  BirthDate ='".$conn->real_escape_string($_POST['s_birthdate'])."',
                  BirthPlace ='".$conn->real_escape_string($_POST['s_birthplace'])."',
                  Occupation ='".$conn->real_escape_string($_POST['s_occupation'])."',
                  Nationality ='".$conn->real_escape_string($_POST['s_nationality'])."',
                  Gender ='".$conn->real_escape_string($_POST['s_gender'])."',
                  Height ='".$conn->real_escape_string($_POST['s_height'])."',
                  Weight ='".$conn->real_escape_string($_POST['s_weight'])."',
                  Marital_Status ='".$conn->real_escape_string($_POST['s_mstatus'])."'
                where suspectID = '".$conn->real_escape_string($_REQUEST['id'])."'";
      
      //execute the query
      if( $conn->query($query) ) {
        //if saving success
        echo "User was created.";
        echo "<script>
                  window.location='https://gis-kmarkb-8017.c9.io/suspects.php';
                </script>";
      }else{
        //if unable to create new record
        echo "Database Error: Unable to create record.";
      }

      //close database connection
      $conn->close();
  }
  
?>
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
      <form action="#" method="post" id="suspectForm">
        <div class="form-group">
          <label for="s_statusID">Status</label>
          <input type="textbox" class="form-control" id="s_statusID" name="s_status" placeholder="Enter Status">
        </div>
        <div class="form-group">
          <label for="s_lnameID">Last Name</label>
          <input type="textbox" class="form-control" id="s_lnameID" name="s_lName" placeholder="Last Name">
        </div>
        <div class="form-group">
          <label for="s_fnameID">First Name</label>
          <input type="textbox" class="form-control" id="s_fnameID" name="s_fName" placeholder="First Name">
        </div>
        <div class="form-group">
          <label for="s_mnameID">Middle Name</label>
          <input type="textbox" class="form-control" id="s_mnameID" name="s_mName" placeholder="Middle Name">
        </div>
        <div class="form-group">
          <label for="s_houseNumID">House Number</label>
          <input type="textbox" class="form-control" id="s_houseNumID" name="s_houseNum" placeholder="Enter House #">
        </div>
        <div class="form-group">
          <label for="s_streetNameID">Street Name</label>
          <input type="textbox" class="form-control" id="s_streetNameID" name="s_streetName" placeholder="Enter Street Name">
        </div>
        <div class="form-group">
          <label for="s_cityID">City</label>
          <input type="textbox" class="form-control" id="s_cityID" name="s_city" placeholder="Enter City">
        </div>
        <div class="form-group">
          <label for="s_birthdateID">Birth Date</label>
          <input type="date" class="form-control" id="s_birthdateID" name="s_birthdate" placeholder="Enter Birthdate">
        </div>
        <div class="form-group">
          <label for="s_birthplaceID">Birth Place</label>
          <input type="textbox" class="form-control" id="s_birthplaceID" name="s_birthplace" placeholder="Enter Birthplace">
        </div>
        <div class="form-group">
          <label for="s_occupationID">Occupation</label>
          <input type="textbox" class="form-control" id="s_occupationID" name="s_occupation" placeholder="Enter Occupation">
        </div>
        <div class="form-group">
          <label for="s_nationalityID">Nationality</label>
          <input type="textbox" class="form-control" id="s_nationalityID" name="s_nationality" placeholder="Enter Nationality">
        </div>
        <div class="form-group">
          <label for="s_genderID">Gender</label>
          <input type="textbox" class="form-control" id="s_genderID" name="s_gender" placeholder="Enter Gender">
        </div>
        <div class="form-group">
          <label for="s_heightID">Height</label>
          <input type="textbox" class="form-control" id="s_heightID" name="s_height" placeholder="Enter Height by Centimeters">
        </div>
        <div class="form-group">
          <label for="s_weightID">Weight</label>
          <input type="textbox" class="form-control" id="s_weightID" name="s_weight" placeholder="Enter Weight by Kilograms">
        </div>
        <div class="form-group">
          <label for="s_mstatusID">Marital Status</label>
          <input type="textbox" class="form-control" id="s_mstatusID" name="s_mstatus" placeholder="Enter Marital Status">
        </div>
        <input type="submit" class="btn btn-primary btn-lg" value="Add" name="action" onclick="location.href='http://localhost/kmbgis/casedetails.php'">
        
        <!-- so that we could identify what record is to be updated -->
        <input type='hidden' name='s_id' value='<?php echo $SuspectID ?>' />
      
        <!-- so that we could identify what record is to be updated -->
        <input type='hidden' name='id' value='<?php echo $CrimeID ?>' />
      </form>
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