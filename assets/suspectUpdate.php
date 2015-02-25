<?php
  //connect to database
  include('config.php');

  //check any user action
  $action = isset( $_POST['action'] ) ? $_POST['action'] : "";
  
  //if the user hit the submit button
  if($action == "update"){ 
    //write our update query
    //$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
    $query = "update suspect_data
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
              where SuspectID ='".$conn->real_escape_string($_REQUEST['id'])."' ";

    //Execute the query
    if($result = $conn->query($query)){
      echo "Suspect was updated";
      echo "<script>
              window.location='http://localhost/kmbgis/suspects.php';
            </script>";
    }else{
      echo"Database error: Unable to update record.";
    }
  }

    //select the specific database record to update
    $query = "SELECT SuspectID, Status, LastName, FirstName, MiddleName, BirthDate, BirthPlace, Occupation, Nationality, Gender, Height, Weight, Marital_Status, City, HouseNumber, StreetName 
              FROM suspect_data 
              WHERE SuspectID='".$conn->real_escape_string($_REQUEST['id'])."'
              limit 0,1";

    //Execute the query          
    if($result = $conn->query($query)){
      echo "Query Success!";
    }else{
      echo "Database Specific Select Error!";
    }

    //get the result
    $row = $result->fetch_assoc();

    //Assign Variables
    $SuspectID = $row['SuspectID'];
    $Status = $row['Status'];
    $LastName = $row['LastName'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
    $HouseNumber = $row['HouseNumber'];
    $StreetName = $row['StreetName'];
    $City = $row['City'];
    $BirthDate = $row['BirthDate'];
    $BirthPlace = $row['BirthPlace'];
    $Occupation = $row['Occupation'];
    $Nationality = $row['Nationality'];
    $Gender = $row['Gender'];
    $Height = $row['Height'];
    $Weight = $row['Weight'];
    $MaritalStatus = $row['Marital_Status'];

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
    <?php include '../assets/headerIN.php'; ?>

    <section class="container-fluid">
      <?php include '../assets/loginForm.php'; ?>
      <div class="jumbotron">
        <h3 class="text-center">Police Database System</h3>
        <h4 class="text-center">Update Suspect Details</h4>
      </div>
      <div class="updateForm" >
        <form action="#" method="post" id="suspectForm">
          <div class="form-group">
            <label for="s_statusID">Status</label>
            <input type="textbox" value="<?php echo $Status; ?>" class="form-control" id="s_statusID" name="s_status" placeholder="Enter Status">
          </div>
          <div class="form-group">
            <label for="s_lnameID">Last Name</label>
            <input type="textbox" value="<?php echo $LastName; ?>" class="form-control" id="s_lnameID" name="s_lName" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="s_fnameID">First Name</label>
            <input type="textbox" value="<?php echo $FirstName; ?>" class="form-control" id="s_fnameID" name="s_fName" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="s_mnameID">Middle Name</label>
            <input type="textbox" value="<?php echo $MiddleName; ?>" class="form-control" id="s_mnameID" name="s_mName" placeholder="Middle Name">
          </div>
          <div class="form-group">
            <label for="s_houseNumID">House Number</label>
            <input type="textbox" value="<?php echo $HouseNumber; ?>" class="form-control" id="s_houseNumID" name="s_houseNum" placeholder="Enter House #">
          </div>
          <div class="form-group">
            <label for="s_streetNameID">Street Name</label>
            <input type="textbox" value="<?php echo $StreetName; ?>" class="form-control" id="s_streetNameID" name="s_streetName" placeholder="Enter Street Name">
          </div>
          <div class="form-group">
            <label for="s_cityID">City</label>
            <input type="textbox" value="<?php echo $City; ?>" class="form-control" id="s_cityID" name="s_city" placeholder="Enter City">
          </div>
          <div class="form-group">
            <label for="s_birthdateID">Birth Date</label>
            <input type="date" value="<?php echo $BirthDate; ?>" class="form-control" id="s_birthdateID" name="s_birthdate" placeholder="Enter Birthdate">
          </div>
          <div class="form-group">
            <label for="s_birthplaceID">Birth Place</label>
            <input type="textbox" value="<?php echo $BirthPlace; ?>" class="form-control" id="s_birthplaceID" name="s_birthplace" placeholder="Enter Birthplace">
          </div>
          <div class="form-group">
            <label for="s_occupationID">Occupation</label>
            <input type="textbox" value="<?php echo $Occupation; ?>" class="form-control" id="s_occupationID" name="s_occupation" placeholder="Enter Occupation">
          </div>
          <div class="form-group">
            <label for="s_nationalityID">Nationality</label>
            <input type="textbox" value="<?php echo $Nationality; ?>" class="form-control" id="s_nationalityID" name="s_nationality" placeholder="Enter Nationality">
          </div>
          <div class="form-group">
            <label for="s_genderID">Gender</label>
            <input type="textbox" value="<?php echo $Gender; ?>" class="form-control" id="s_genderID" name="s_gender" placeholder="Enter Gender">
          </div>
          <div class="form-group">
            <label for="s_heightID">Height</label>
            <input type="textbox" value="<?php echo $Height; ?>" class="form-control" id="s_heightID" name="s_height" placeholder="Enter Height by Centimeters">
          </div>
          <div class="form-group">
            <label for="s_weightID">Weight</label>
            <input type="textbox" value="<?php echo $Weight; ?>" class="form-control" id="s_weightID" name="s_weight" placeholder="Enter Weight by Kilograms">
          </div>
          <div class="form-group">
            <label for="s_mstatusID">Marital Status</label>
            <input type="textbox" value="<?php echo $MaritalStatus; ?>" class="form-control" id="s_mstatusID" name="s_mstatus" placeholder="Enter Marital Status">
          </div>
          
          <!-- so that we could identify what record is to be updated -->
          <input type='hidden' name='id' value='<?php echo $SuspectID ?>' />
          
          <!-- we will set the action to update -->
          <input type='hidden' name='action' value='update' />
          <input type="submit" class="btn btn-primary btn-lg" name="Edit" value="Submit" onclick="location.href='http://localhost/kmbgis/suspects.php'">
          <div class="form-group">
            <a href="../suspects.php" class="btn btn-danger">Back to Suspects</a>
          </div>
        </form>
      </div>
    </section>

    <?php include '../assets/footer.php'; ?>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>