<?php
$station_model = new \App\Models\StationModel();
$fnd =  $station_model->find($param1);

//pr($fnd);

?>

<form id="form_add" action="<?= base_url() ?>/hodstore/edit_station" method="POST">
    <div class="form-group">
        <label for="station">Edit station name:</label>
        <input type="text" value="<?= $fnd->name ?>" required class="form-control" id="station" name="station" aria-describedby="stationHelp">
        <input type="hidden" name="id" value="<?= $param1 ?>">
        <small id="stationHelp" class="form-text text-muted">Ensure the station name is correct.</small>
    </div>

    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Edit station</button>
    </div>


</form>

<script>
    jQuery(function() {
        do_nav("a.addpage_nav");
    });
</script>