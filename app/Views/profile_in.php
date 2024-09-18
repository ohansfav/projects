<?php 
$this->config = config('Auth');
$redirect = $this->config->assignRedirect;
$validation = \Config\Services::validation();

//pr($redirect);
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto  bg-white form-wrapper">


            <?php $validation = \Config\Services::validation(); ?>
            <?php if (session()->get('success')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <?= session()->get('success'); ?>
                </div>
            <?php endif; ?>
            <form class="" action="<?php echo base_url(); ?>/dashboard/profile" method="post">
                <div class="form-group">
                    <h2 class="text-success"><?php echo $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] ?></h2>
                    <input type='hidden' name='firstname'  value='<?= set_value('firstname', session()->get('firstname')) ?>'>
                    <input type='hidden' name='lastname'  value='<?= set_value('lastname', session()->get('lastname')) ?>'>
                                    
                </div>
                <?php
                if (in_array($_SESSION['role'], [1])) {
                ?>
                    <div class='row'>

                        <div class="col-md">
                            <div class="form-group">
                                <label for="firstname">First Name</label>
                                <?php
                                if (in_array($_SESSION['role'], [1])) {
                                ?>
                                    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname', session()->get('firstname')) ?>">
                                <?php
                                } else {
                                    echo "<br>" . set_value('firstname', session()->get('firstname'));
                                }
                                ?>

                                <?php if ($validation->getError('firstname')) { ?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError('firstname'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <?php
                                if (in_array($_SESSION['role'], [1])) {
                                ?>

                                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname', session()->get('lastname')) ?>">
                                <?php
                                } else {
                                    echo "<br>" . set_value('lastname', session()->get('lastname'));
                                } ?>
                                <?php if ($validation->getError('lastname')) { ?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError('lastname'); ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="email">Email Address: </label>
                    <?php

                    echo "<input type='hidden' name='email'  value='".set_value('email', session()->get('email')) ."'>
                    " . set_value('email', session()->get('email'));
                    ?>

                    <?php if ($validation->getError('email')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('email'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class='row'>
                    <div class='col-md'>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" value="">
                            <?php if ($validation->getError('password')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('password'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class='col-md'>
                        <div class="form-group">
                            <label for="password_confirm">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                            <?php if ($validation->getError('password_confirm')) { ?>
                                <div class='alert alert-danger mt-2'>
                                    <?= $error = $validation->getError('password_confirm'); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <br>


                <div class=" text-center">
                    <div class="col-md">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                </div>
            </form>


        </div>
    </div>
</div>

<br>
<script>
    jQuery(function() {
        do_nav("a.profile_nav");
    });
</script>