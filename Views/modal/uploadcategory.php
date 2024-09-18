<form  action="<?=base_url()?>/storestaff/submit_uploadcategory" method="POST"  enctype="multipart/form-data">

  <div class="form-group">
    <label for="categoryCsvFile">Select Category List CSV File</label>
    <input type="file" required class="form-control-file" id="categoryCsvFile" name="categoryCsvFile" aria-describedby="fileHelp" >
    <small id="fileHelp" class="form-text text-muted">Select only a Comma Delimited, CSV file here. With columns like this <a href="<?=base_url()?>/splash/sample_category.csv">sample here</a></small>
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