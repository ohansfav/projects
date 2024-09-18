<?php
$item_model = new \App\Models\ItemModel();
$item_in =  $item_model->find($param1);

//pr($item_in);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php if ($item_in->item_photo1) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
        <?php endif; ?>
        <?php if ($item_in->item_photo2) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <?php endif; ?>
        <?php if ($item_in->item_photo3) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <?php endif; ?>
        <?php if ($item_in->item_photo4) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <?php endif; ?>
    </ol>
    <div class="carousel-inner">
        <?php if ($item_in->item_photo1) : ?>
            <div class="carousel-item active" data-interval='3000'>
                <img class="d-block w-100 img rounded" src="<?= "data:image/png;base64," . $item_in->item_photo1 ?>" />

            </div>
        <?php endif; ?>
        <?php if ($item_in->item_photo2) : ?>
            <div class="carousel-item" data-interval='3000'>
                <img class="d-block w-100 img rounded" src="<?= "data:image/png;base64," . $item_in->item_photo2 ?>" />
            </div>
        <?php endif; ?>

        <?php if ($item_in->item_photo3) : ?>
            <div class="carousel-item" data-interval='3000'>
                <img class="d-block w-100 img rounded" src="<?= "data:image/png;base64," . $item_in->item_photo3 ?>" />
            </div>
        <?php endif; ?>

        <?php if ($item_in->item_photo4) : ?>
            <div class="carousel-item" data-interval='3000'>
                <img class="d-block w-100 img rounded" src="<?= "data:image/png;base64," . $item_in->item_photo4 ?>" />
            </div>
        <?php endif; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<script>
    jQuery(function() {
        do_nav("a.browseitems_nav");
    });
</script>