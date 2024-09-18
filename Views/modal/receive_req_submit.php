<?php
$reqs_model = new \App\Models\RequisitionsModel();
$fnd =  $reqs_model->find($param1);

//pr($fnd);

?>

<form id="form_submit" action="<?= base_url() ?>/deptstaff/receive_req" method="POST">
    <div class="form-group">
        <label for="station">Remark about this requisition:</label>
        <textarea placeholder="Totally optional"   class="form-control" id="receive_remark" name="receive_remark" aria-describedby="receive_remarkHelp"></textarea>
        <input type="hidden" name="req_id" value="<?= $param1 ?>">
        <small id="receive_remarkHelp" class="form-text text-info bennysmall">Enter anything you wish to note regarding items in this requisition. Please ensure your entry (if any) is accurate.</small>
    </div>

    <div class="form-group text-center">
        <button type="submit"  onclick="submitConfirm('Receive this requisition?','Are you sure you wish to receive this requisition? It will be officially recorded that this requisition has been received by you from the store. Are you sure you wish to continue?',jQuery('#form_submit')); return false;" class="btn btn-success">Receive requisition</button>
    </div>
    
</form>

<script>
    jQuery(function() {
        do_nav("a.dashboard_nav");
    });
</script>