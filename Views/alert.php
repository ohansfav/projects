<script src="<?php echo base_url(); ?>toastr/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>toastr/toastr.css">

<!-- <h1>Welcome</h1> -->

<script type="text/javascript">

    <?php if (isset($_SESSION['success'])) { ?>
        toastr.success("<?php echo $_SESSION['success']; ?>");
        //shows if successful 
    <?php } else if (isset($_SESSION['error'])) { ?>
            toastr.error("<?php echo $_SESSION['error']; ?>");
            //shows if error is detected
    <?php } else if (isset($_SESSION['warning'])) { ?>
                toastr.warning("<?php echo $_SESSION['warning']; ?>");
                //shows if warning is detected
    <?php } else if (isset($_SESSION['info'])) { ?>
                    toastr.info("<?php echo $_SESSION['info']; ?>");
                    //shows if info is detected
    <?php } else if (isset($_SESSION['info_stay'])) { ?>
                        alertInfo("Important information", "<?php echo $_SESSION['info_stay']; ?>");
    <?php } else if (isset($_SESSION['error_stay'])) { ?>
                            alertError("Critical Error", "<?php echo $_SESSION['error_stay']; ?>");
    <?php } ?>


</script>