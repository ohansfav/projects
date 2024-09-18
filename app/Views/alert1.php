<script src="<?php echo base_url('app/views/profile_in.php'); ?>/splash/vendor/toastr/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/splash/vendor/toastr/toastr.css">
   


    <script type="text/javascript">


    <?php if (isset($_SESSION['success'])) {?>
        // toastr.success("<?php echo $_SESSION['success']; ?>");
        <h1> "your nformation is successfukll saved" <h1>
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
