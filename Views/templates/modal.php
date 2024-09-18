<script src="<?php echo base_url(); ?>/splash/css/magnific/jquery.magnific-popup.js"></script>


<script type="text/javascript">
    function showAjaxModal(url, title_in, wide_in = 0) {
        jQuery('.modal-title').text(title_in);
        // SHOWING AJAX PRELOADER IMAGE
        jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="<?= base_url() ?>/splash/images/preloader.gif" /></div>');

        // LOADING THE AJAX MODAL
        jQuery('#modal_ajax').modal('show', {
            backdrop: 'true'
        });

        if (wide_in == 1) {
            jQuery('#modal_ajax .modal-dialog').addClass("modal-xl");
            jQuery('#modal_ajax .modal-dialog').removeClass("modal-lg");
        } else if (wide_in == 2) {
            jQuery('#modal_ajax .modal-dialog').addClass("modal-lg");
            jQuery('#modal_ajax .modal-dialog').removeClass("modal-xl");
        } else {
            jQuery('#modal_ajax .modal-dialog').removeClass("modal-xl");
            jQuery('#modal_ajax .modal-dialog').removeClass("modal-lg");
        }


        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response) {
                jQuery('#modal_ajax .modal-body').html(response);
            }
        });
    }

    
</script>

<!-- (Ajax Modal)-->
<div class="modal fade" id="modal_ajax">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>

            <div class="modal-body" style="height:auto; overflow:auto;">



            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
    function confirm_modal(delete_url) {
        jQuery('#modal-4').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', delete_url);
    }
</script>

<!-- (Normal Modal)-->
<div class="modal fade" id="modal-4">
    <div class="modal-dialog">
        <div class="modal-content" style="margin-top:100px;">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="text-align:center;">This cannot be undone, do you REALLY want to delete this?</h4>
            </div>


            <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                <a href="#" class="btn btn-danger" id="delete_link">Delete</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>