<?php
$category_model = new \App\Models\CategoryModel();
$fnd =  $category_model->find($param1);

//pr($fnd);

?>

<form id="form_add" action="<?= base_url() ?>/storestaff/edit_category" method="POST">
    <div class="form-group">
        <label for="category">Category name:</label>
        <input type="text" value="<?= $fnd->name ?>" required class="form-control" id="category" name="category" aria-describedby="categoryHelp">
        <input type="hidden" name="id" value="<?= $param1 ?>">
        <small id="categoryHelp" class="form-text text-muted">Ensure the category name is correct.</small>
    </div>


    <div class="form-group">
        <label for="descr">Description:</label>
        <textarea class="form-control" id="descr" name="descr" rows="3"><?= $fnd->descr ?></textarea>
        <small id="categoryHelp" class="form-text text-muted">Optional: Enter a description for this category.</small>
    </div>

    <div class="form-group">
        <label for="store_location">Store location:</label>
        <input type="text"   value="<?= $fnd->store_location ?>"  required class="form-control" id="store_location" name="store_location" aria-describedby="categoryHelp">
        <small id="categoryHelp" class="form-text text-muted">Optional: Enter the location in the store to keep items in this category</small>
    </div>





    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Edit category</button>
    </div>

</form>


<script>
    jQuery(function() {
        do_nav("a.addpage_nav");
    });
</script>