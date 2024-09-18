<?php

//pr($param1);

$idcardstore = new \App\Models\IDCardStoreModel();
$photo_preview = $idcardstore->where("photo!=", null)->find($param1)->photo;


?>

<div class='row'>
  <div class='col-md'>
    <form action="<?= base_url() ?>/dashboard/uploadphoto" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label for="idphoto">Select Photo</label>
        <input type="file" required class="form-control-file" id="idphoto" name="idphoto" aria-describedby="idphoto">
        <input type="hidden" id="idcard_id" name="idcard_id" value="<?= $param1 ?>">
        <small id="fileHelp" class="form-text text-muted">Select an image file please</small>
      </div>
      <div class="text-center mx-auto">
        <button type="submit" class="btn btn-primary">Upload</button>
      </div>
    </form>
  </div>
    <?php

    if ($photo_preview) {

      echo "<div class='col-md'><div class='text-center'><span class='text-muted'>Current photo</span><img class='rounded' style=\"width:90%\" src=\"data:image/jpg;base64," . $photo_preview . "\" /></div></div>";
    }

    ?>
</div>