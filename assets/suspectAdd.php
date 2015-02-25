<?php
      //Database connection
      include 'config.php';

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
                Marital_Status ='".$conn->real_escape_string($_POST['s_mstatus'])."'";
      
      //execute the query
      if( $conn->query($query) ) {
        //if saving success
        echo "User was created.";
        echo "<script>
                  window.location='http://localhost/kmbgis/suspects.php';
                </script>";
      }else{
        //if unable to create new record
        echo "Database Error: Unable to create record.";
      }

      //close database connection
      $conn->close();
?>