<?php

//pr($param1);

?>
<form  action="<?=base_url()?>/superadmin/uploadstaff" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="def_pin" >Select Staff Type</label>
    <select name="staff_type"   class="form-control" id="staff_type">
      <option value="it">IT Staff</option>
      <option value="pro">PRO Staff</option>
    </select>
  </div>
  <div class="form-group">
    <label for="staffCsvFile">Select Staff List CSV File</label>
    <input type="file" required class="form-control-file" id="staffCsvFile" name="staffCsvFile" aria-describedby="fileHelp" >
    <input type="hidden"  id="dept_id"  name="dept_id" value="<?=$param1?>" >
    <small id="fileHelp" class="form-text text-muted">Select only a Comma Delimited, CSV file here. With columns like this <a href="<?=base_url()?>/splash/sample_staff.csv">sample here</a></small>
  </div>
  <div class="text-center mx-auto">
        <button type="submit" class="btn btn-primary">Upload</button>
  </div>
</form>