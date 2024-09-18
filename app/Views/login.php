<article class="panel intro">

    <div class="container">
        <div class="row">
            <div class="col-md-4 mx-auto  bg-white form-wrapper">
                <br>
                <?php $validation = \Config\Services::validation(); ?>

                <!--   <?php if (session()->get('success')) : ?>
                    <div class="alert alert-success bennysmall" role="alert">
                        <?= session()->get('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if (session()->get('danger')) : ?>
                    <div class="alert alert-danger bennysmall" role="alert">

                    <div class='row'>
                        <div class='col-md-auto'><i class="fa fa-exclamation-triangle fa-3x"></i></div>
                        <div class='col-md'>  <?= session()->get('danger'); ?>
                        <?php if (session()->get('resetlink')) {
                            echo session()->get('resetlink');
                        } ?></div>
                    </div>
                      
                    </div>
                <?php endif; ?> -->
                <form class="" action="<?php echo base_url(); ?>/login" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                        <?php if ($validation->getError('email')) { ?>
                            <div class='alert bennysmall  alert-danger mt-2'>
                                <?= $error = $validation->getError('email'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" value="">
                        <?php if ($validation->getError('password')) { ?>
                            <div class='alert bennysmall  alert-danger mt-2'>
                                <?= $error = $validation->getError('password'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php if ($config->rememberMe) : ?>
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" value="1">
                            <label class="form-check-label small" for="rememberme">Remember Me</label>
                        </div>
                    <?php endif; ?>

                    <div class="form-group row loginhide">
                        <label class='col-md'>
                            <?= $captcha_login->image; ?><?= $captcha_login->answer; ?>
                        </label>
                        <div class="col-md captchaans">
                            <?= $captcha_login->answer_input; ?>
                        </div>
                    </div>

                    <div class="form-group">

                        <div class=' row '>
                            <div class='loginhide col-md pb-1'><button type="submit" id="submitBtn" class="btn btn-primary btn-block">Login</button></div>


                            <?php if ($config->allowRegistration) { ?>
                                <div class='loginhide col-md text-right'><a class="" href="<?php echo base_url(); ?>/register">Sign Up</a></div>
                            <?php } ?>

                            <div class='loginhide col-md  text-right'>
                                <a class="btn btn-warning btn-block" href="<?php echo base_url(); ?>/forgotpassword">Forgot Password?</a>
                            </div>
                            <div class="col-md-12 text-center" id="loginProgressHolder">
                                <img src="<?php echo base_url(); ?>/splash/img/ajax-loader.gif">
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

        jQuery("#loginProgressHolder").hide();

        jQuery("#submitBtn").click(function() {

            if (jQuery("#login_answer_ans").val() != "") {
                jQuery(".loginhide").fadeOut(100);
                jQuery("#loginProgressHolder").fadeIn(100);
            } else {
                return false;
            }



        });
    });
</script>