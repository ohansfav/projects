<script src="<?php echo base_url(); ?>/assets/toastr/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/toastr/toastr.css">


    <script type="text/javascript">


    <?php if (isset($_SESSION['success'])) {?>
        toastr.success("<?php echo $_SESSION['success']; ?>");
    <?php } else if (isset($_SESSION['error'])) {?>
        toastr.error("<?php echo $_SESSION['error']; ?>");
    <?php } else if (isset($_SESSION['warning'])) {?>
        toastr.warning("<?php echo $_SESSION['warning']; ?>");
    <?php } else if (isset($_SESSION['info'])) {?>
        toastr.info("<?php echo $_SESSION['info']; ?>");
    <?php } else if (isset($_SESSION['info_stay'])) {?>
        alertInfo("Important information","<?php echo $_SESSION['info_stay']; ?>");
    <?php } else if (isset($_SESSION['error_stay'])) {?>
        alertError("Critical Error","<?php echo $_SESSION['error_stay']; ?>");
    <?php }?>


    </script>