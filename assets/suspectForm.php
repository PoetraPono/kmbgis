<form action="assets/suspectAdd.php" method="post" id="suspectForm">
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
  <input type="hidden" name="action" value="create">
  <input type="submit" class="btn btn-primary btn-lg" value="Save">
</form>