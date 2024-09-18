<?php
$department_model = new \App\Models\DepartmentsModel();
$fnd =  $department_model->find($param1);

//pr($fnd);

?>

<form id="form_add" action="<?= base_url() ?>/superadmin/edit_department" method="POST">
    <div class="form-group">
        <label for="department">Edit department name:</label>
        <input type="text" value="<?= $fnd->name ?>" required class="form-control" id="department_name" name="department_name" aria-describedby="departmentHelp">
        <input type="hidden" name="id" value="<?= $param1 ?>">
        <small id="departmentHelp" class="form-text text-muted">Ensure the department name is correct.</small>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Edit department</button>
    </div>

</form>

<script>
    jQuery(function() {
        do_nav("a.adddept_nav");
    });
</script>