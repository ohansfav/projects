<article class="panel intro">

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto  bg-white form-wrapper">
            <br> <?php $validation = \Config\Services::validation(); ?>
<!-- 
               
                <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success bennysmall" role="alert">
                        <?= session()->get('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->get('danger')) : ?>
                    <div class="alert alert-danger bennysmall" role="alert">

                        <div class='row'>
                            <div class='col-md-auto'><i class="fa fa-exclamation-triangle fa-3x"></i></div>
                            <div class='col-md'> <?= session()->get('danger'); ?></div>
                        </div>

                    </div>
                <?php endif; ?> -->

                <form class="" action="<?php echo base_url(); ?>/updatepassword/<?= $id ?>" method="post">
                    <div class="form-group">
                        <h3>Reset Password</h3>
                        <p class="bennysmall">Enter your new password</p>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="">
                        <?php if ($validation->getError('password')) { ?>
                            <div class='alert bennysmall alert-danger mt-2'>
                                <?= $error = $validation->getError('password'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="password_confirm">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                        <?php if ($validation->getError('password_confirm')) { ?>
                            <div class='alert bennysmall  alert-danger mt-2'>
                                <?= $error = $validation->getError('password_confirm'); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                    <br>
                        <div class=' row '>
                            <div class='col-md pb-1'><button type="submit" class="btn btn-primary btn-block">Reset</button></div>

                            <div class='col-md  text-right'>
                                <a class="btn btn-success btn-block" href="<?php echo base_url(); ?>/login">Login</a>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </div>
</article>
<script>
    jQuery(function() {
        do_nav("a.lock_nav");
    });
</script>