<script src="<?php echo base_url('app/views/profile_in.php'); ?>/splash/vendor/toastr/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/splash/vendor/toastr/toastr.css">

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (isset($_SESSION['success'])) { ?>
            toastr.success("<?php echo addslashes($_SESSION['success']); ?>");
        <?php } else if (isset($_SESSION['error'])) { ?>
            toastr.error("<?php echo addslashes($_SESSION['error']); ?>");
        <?php } else if (isset($_SESSION['warning'])) { ?>
            toastr.warning("<?php echo addslashes($_SESSION['warning']); ?>");
        <?php } else if (isset($_SESSION['info'])) { ?>
            toastr.info("<?php echo addslashes($_SESSION['info']); ?>");
        <?php } else if (isset($_SESSION['info_stay'])) { ?>
            alertInfo("Important information", "<?php echo addslashes($_SESSION['info_stay']); ?>");
        <?php } else if (isset($_SESSION['error_stay'])) { ?>
            alertError("Critical Error", "<?php echo addslashes($_SESSION['error_stay']); ?>");
        <?php } ?>
    });
</script>

