<?php
$rtn_model = new \App\Models\ReturnedItemsModel();
$fnd =  $rtn_model->find($param1);

//pr($fnd);
//pr($param2);
?>

<form id="form_add" action="<?= base_url() ?>/storestaff/return_appr" method="POST">


    <div class="form-group">
        <div class=''>
            <div class='col-md'><span class="badge badge-light">Item code:</span> <?= $fnd->generated_item_code ?></div>
            <div class='col-md'><span class="badge badge-light">Condition: </span> <?= ucwords($fnd->condition) ?></div>
            <div class='col-md'><span class="badge badge-light">Remark: </span> <?= $fnd->remark ? $fnd->remark : 'None' ?></div>
            <div class='col-md'><span class="badge badge-light">Remark (Store): </span> <?= $fnd->remark_store ? $fnd->remark_store : 'None' ?></div>
            <div class='col-md'><span class="badge badge-light">Availability: </span> <?= $fnd->issued_out ? "Item has been issued out" : 'Available in store' ?></div>
        </div>

    </div>

    <?php
    if (in_array($_SESSION['role'], [2, 3]) && $fnd->issued_out == 0) {
        //permissions for storedmin access.

    ?>

        <div class="form-group">
            <div class='row'>
                <div class='col-md'>
                    <div class='row m-2'>
                        <div class='col-md'>Approve this return:</div>
                        <div class='col-md-auto'>
                            <input type="checkbox" data-offstyle="danger" data-onstyle="success" data-onlabel="Yes" data-offlabel="No" data-toggle="switchbutton" name="approved_by_store_status" id="approved_by_store_status" data-width="100">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class='row m-2'>
                <div class='col-md'>Item is serviceable:</div>
                <div class='col-md-auto'>
                    <input type="checkbox" data-offstyle="danger" data-onstyle="success" data-onlabel="Yes" data-offlabel="No" data-toggle="switchbutton" name="serviceable" id="serviceable" data-width="100">
                </div>
            </div>
        </div>


        <?php if ($param2 != "nodispose") { ?>
            <div class="form-group">
                <div class='row m-2'>
                    <div class='col-md'>Item is disposed:</div>
                    <div class='col-md-auto'>
                        <input type="checkbox" data-offstyle="danger" data-onstyle="success" data-onlabel="Yes" data-offlabel="No" data-toggle="switchbutton" name="disposed" id="disposed" data-width="100">
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="form-group">
            <label for="descr">Remarks:</label>
            <textarea class="form-control" id="descr" name="remark_store" rows="3"><?= $fnd->remark_store ?></textarea>
        </div>

        <input type="hidden" name="ret_item_id" value="<?= $param1 ?>">
        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

    <?php } ?>

</form>

<script>
    //necessary for switch buttons to work
    document.querySelectorAll('input[type=checkbox][data-toggle="switchbutton"]').forEach(function(ele) {
        ele.switchButton();
    });

    jQuery(function() {
        do_nav("a.returned_items_nav");

        var approved = <?= $fnd->approved_by_store_status == "yes" ? "true" : 0; ?>;
        var serviceable = <?= $fnd->serviceable ? "true" : 0; ?>;
        var disposed = <?= $fnd->disposed ? "true" : 0; ?>;

        if (approved) {
            document.getElementById('approved_by_store_status').switchButton('on');
        } else {
            document.getElementById('approved_by_store_status').switchButton('off');
        }
        if (serviceable) {
            document.getElementById('serviceable').switchButton('on');
        } else {
            document.getElementById('serviceable').switchButton('off');
        }

        if (disposed) {
            document.getElementById('disposed').switchButton('on');
        } else {
            document.getElementById('disposed').switchButton('off');
        }
    });
</script>