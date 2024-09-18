<?php
$supplier_model = new \App\Models\SupplierModel();
$fnd =  $supplier_model->find($param1);

?>

<form id="form_add" action="<?= base_url() ?>/storestaff/edit_supplier" method="POST">
    <div class="form-group">
        <label for="supplier">Edit supplier name:</label>
        <input type="text" value="<?= $fnd->name ?>" required class="form-control" id="supplier" name="supplier" aria-describedby="supplierHelp">
        <input type="hidden" name="id" value="<?= $param1 ?>">
        <small id="supplierHelp" class="form-text text-muted">Ensure the supplier name is correct.</small>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Edit supplier</button>
    </div>


</form>

<script>
    jQuery(function() {
        do_nav("a.addpage_nav");
    });
</script>