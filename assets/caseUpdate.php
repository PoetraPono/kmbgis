<?php
  include('config.php');

  //check any user action
  $action = isset( $_POST['action'] ) ? $_POST['action'] : "";
  
  //if the user hit the submit button on Case Detail
  if($action == "Update"){
    //write our update query
    //$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
    $query = "update case_detail, suspect_data
              set
                case_detail.ReportingUnit ='".$conn->real_escape_string($_POST['r_unit'])."',
                case_detail.DateOfReporting ='".$conn->real_escape_string($_POST['d_report'])."',
                case_detail.TimeOfReporting ='".$conn->real_escape_string($_POST['t_report'])."',
                suspect_data.LastName ='".$conn->real_escape_string($_POST['s_lName'])."',
                suspect_data.FirstName ='".$conn->real_escape_string($_POST['s_fName'])."',
                suspect_data.MiddleName ='".$conn->real_escape_string($_POST['s_mName'])."'
              where case_detail.Crime_Case_ID ='".$conn->real_escape_string($_REQUEST['id'])."' and suspect_data.SuspectID ='".$conn->real_escape_string($_REQUEST['s_id'])."' ";
    
    //Execute the query
    if($result = $conn->query($query)){
      echo "<script>
                window.location='https://gis-kmarkb-8017.c9.io/casedetails.php';
              </script>";
    }else{
      echo"Database error: Unable to update record.";
    }
  }

    //select the specific database record to update
    $query = "SELECT Crime_Case_ID, ReportingUnit, DateOfReporting, TimeOfReporting
              FROM case_detail 
              WHERE Crime_Case_ID='".$conn->real_escape_string($_REQUEST['id'])."'
              limit 0,1";

    //Execute the query          
    if($result = $conn->query($query)){
      echo " Query Success!";
    }else{
      echo "Database Specific Select Error!";
    }

    //get the result
    $row = $result->fetch_assoc();

    //Assign Variables
    $CrimeID = $row['Crime_Case_ID'];
    $ReportingUnit = $row['ReportingUnit'];
    $DateOfReporting = $row['DateOfReporting'];
    $TimeOfReporting = $row['TimeOfReporting'];
    
    //select the specific database record to update
    $query1 = "SELECT SuspectID, LastName, FirstName, MiddleName
              FROM suspect_data 
              WHERE SuspectID='".$conn->real_escape_string($_REQUEST['s_id'])."'
              limit 0,1";

    //Execute the query          
    if($result = $conn->query($query1)){
      echo "Query Success!";
    }else{
      echo "Database Specific Select Error!";
    }

    //get the result
    $row = $result->fetch_assoc();

    //Assign Variables
    $SuspectID = $row['SuspectID'];
    $LastName = $row['LastName'];
    $FirstName = $row['FirstName'];
    $MiddleName = $row['MiddleName'];
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
        <h4 class="text-center">Case Details</h4>
      </div>
      <div class="updateForm" >
        <form action="#" method="post" id="caseFormID">
          <div class="form-group">
            <label for="c_cID">Crime Case Number</label>
            <input readonly type="number" value="<?php echo $CrimeID; ?>" class="form-control" id="c_cID" name="cc_ID" placeholder="Enter Crime Case Number">
          </div>
          <div class="form-group">
            <label for="r_unitID">Reporting Unit</label>
            <input type="text" value="<?php echo $ReportingUnit; ?>" class="form-control" id="r_unitID" name="r_unit" placeholder="Enter Reporting Unit or Station">
            </div>
          <div class="form-group">
            <label for="d_reportID">Date of reporting</label>
            <input type="date" value="<?php echo $DateOfReporting; ?>" class="form-control" id="d_reportID" name="d_report" placeholder="Enter date of report">
          </div>
          <div class="form-group">
            <label for="t_reportID">Time of reporting</label>
            <input type="time" value="<?php echo $TimeOfReporting; ?>" class="form-control" id="t_reportID" name="t_report" placeholder="Enter time of report">
          </div>

          <br>
          <div class="form-group">
            <h3>Suspect(s)</h3>
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

          <!-- so that we could identify what record is to be updated -->
          <input type='hidden' name='s_id' value='<?php echo $SuspectID ?>' />

          <!-- so that we could identify what record is to be updated -->
          <input type='hidden' name='id' value='<?php echo $CrimeID ?>' />
            
          <input type="submit" class="btn btn-primary btn-lg" name="action" value="Update" onclick="location.href='http://localhost/kmbgis/casedetails.php'">
          <input type="submit" class="btn btn-primary btn-lg" name="Edit" value="Add Suspect" onclick="location.href='http://localhost/kmbgis/suspects.php'">
        </form>
      </div>

    </section>

    <?php include '../assets/footer.php'; ?>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
