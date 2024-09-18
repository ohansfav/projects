<?php

//pr($param1);

?>
<form  action="<?=base_url()?>/dashboard/uploadstaff" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="def_pin">Enter Default PIN</label>
    <input type="text" maxlength="4" placeholder="0000" class="text-center form-control" id="def_pin" name="def_pin" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Enter a default PIN here. All staff uploaded will have this PIN. Leaving it empty means the default PIN will be 0000</small>
     <div class="valid-feedback">
        Looks good!
      </div>
  </div>
  <div class="form-group">
    <label for="staffCsvFile">Select Staff List CSV File</label>
    <input type="file" required class="form-control-file" id="staffCsvFile" name="staffCsvFile" aria-describedby="fileHelp" >
    <input type="hidden"  id="dept_id"  name="dept_id" value="<?=$param1?>" >
    <small id="fileHelp" class="form-text text-muted">Select only a Comma Delimited, CSV file here. With columns like this <a href="<?=base_url()?>/splash/sample_staff_department_fmc_attendance_app.csv">sample here</a></small>
  </div>
  <div class="text-center mx-auto">
        <button type="submit" class="btn btn-primary">Upload</button>
  </div>
</form>