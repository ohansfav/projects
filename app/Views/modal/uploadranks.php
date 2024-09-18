<form  action="<?=base_url()?>/superadmin/submit_uploadranks" method="POST"  enctype="multipart/form-data">

  <div class="form-group">
    <label for="rankCsvFile">Select Rank List CSV File</label>
    <input type="file" required class="form-control-file" id="rankCsvFile" name="rankCsvFile" aria-describedby="fileHelp" >
    <small id="fileHelp" class="form-text text-muted">Select only a Comma Delimited, CSV file here. With columns like this <a href="<?=base_url()?>/splash/sample_ranks.csv">sample here</a></small>
  </div>
  <div class="text-center mx-auto">
        <button type="submit" class="btn btn-primary">Upload</button>
  </div>
</form>


<script>
    jQuery(function() {
        do_nav("a.addpage_nav");
    });
</script>