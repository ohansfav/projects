<?php
$rank_model = new \App\Models\RankModel();
$fnd =  $rank_model->find($param1);

//pr($fnd);

?>

<form id="form_add" action="<?= base_url() ?>/superadmin/edit_rank" method="POST">
    <div class="form-group">
        <label for="rank">Edit rank name:</label>
        <input type="text" value="<?= $fnd->name ?>" required class="form-control" id="rank" name="rank" aria-describedby="rankHelp">
        <input type="hidden" name="id" value="<?= $param1 ?>">
        <small id="rankHelp" class="form-text text-muted">Ensure the rank name is correct.</small>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Edit rank</button>
    </div>


</form>


<script>
    jQuery(function() {
        do_nav("a.addpage_nav");
    });
</script>