<?php

$category_model = new \App\Models\CategoryModel();
$all_categorys = $category_model
  ->orderBy("name", "ASC")
  ->findAll();

//pr( $category_model->getLastQuery() );

//pr($all_categorys);

?>

<form action="<?= base_url() ?>/storestaff/submit_uploaditems" method="POST" enctype="multipart/form-data">

  <?php if (!empty($all_categorys)) { ?>
    <div class="form-group">
    <label for="itemCsvFile">Select Category</label>
      <select class="form-control" required name="category_id">
        <option value="">Select a category</option>
        <option value="0">None</option>
        <?php
        foreach ($all_categorys as $a_category) { ?>

          <option value="<?= $a_category->id ?>"><?= $a_category->name ?><span class="bennysmall"><?= $a_category->descr ?></span></option>

        <?php
        }
        ?>
      </select>
    </div>
  <?php } ?>

  <div class="form-group">
    <label for="itemCsvFile">Select item list CSV file</label>
    <input type="file" required class="form-control-file" id="itemCsvFile" name="itemCsvFile" aria-describedby="fileHelp">
    <small id="fileHelp" class="form-text text-muted">Select only a Comma Delimited, CSV file here. With columns like this <a href="<?= base_url() ?>/splash/sample_items.csv">sample here</a></small>
  </div>

  <div class="text-center mx-auto">
    <button type="submit" class="btn btn-success btn-lg"> Upload</button>
  </div>
</form>


<script>
  jQuery(function() {
    do_nav("a.item_nav");
  });
</script>