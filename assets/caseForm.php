<?php
  include('config.php');

  //check any user action
  $action = isset( $_POST['action'] ) ? $_POST['action'] : "";
  

  
  //if the user hit the submit button on Case Detail
  if($action == "Submit"){
    //Case Details Variables
    $crimeNum = $_POST['cc_ID'];
    $r_unit = $_POST['r_unit'];
    $d_report = $_POST['d_report'];
    $t_report = $_POST['t_report'];
    //write our update query
    //$mysqli->real_escape_string() function helps us prevent attacks such as SQL injection
    
    $query = "INSERT INTO case_detail
              set
                ReportingUnit ='$r_unit',
                DateOfReporting ='$d_report',
                TimeOfReporting ='$t_report' ";
    
    //Execute the query
    if($result = $conn->query($query)){
      echo "<script>
                window.location='https://gis-kmarkb-8017.c9.io/assets/suspectArea.php?id='.$crimeNum.';
              </script>";
    }else{
      echo"Database error: Unable to update record.";
    }
  }
?>

<form action="#" method="post" id="caseFormID">
  <div class="form-group">
      <label for="r_unitID">Reporting Unit</label>
      <input type="text" class="form-control" id="r_unitID" name="r_unit" placeholder="Enter Reporting Unit or Station">
  </div>
  <div class="form-group">
      <label for="d_reportID">Date of reporting</label>
      <input type="date" class="form-control" id="d_reportID" name="d_report" placeholder="Enter date of report">
  </div>
  <div class="form-group">
      <label for="t_reportID">Time of reporting</label>
      <input type="time" class="form-control" id="t_reportID" name="t_report" placeholder="Enter time of report">
  </div>
  
  <div class="form-group">
      <input type="submit" class="btn btn-primary btn-lg" name="action" value="Submit">
  </div>
  <input type="hidden" name="cc_ID" value="$crimeNum">
</form>