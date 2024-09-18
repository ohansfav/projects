<?php
$this->app_config = config('App');
//pr($this->app_config->appTitle);



$userauth_mdl = new \App\Models\AuthModel();


$reqs = $userauth_mdl->asObject()->orderBy("created_at", "DESC")
    ->paginate($pager_num);

$pager = $userauth_mdl->pager;

$currentffset = ($pager->getCurrentPage() > 1) ? $pager->getCurrentPage() - 1 : 0;
$slno_start = $currentffset * $pager->getPerPage();

//pr($reqs);



?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto form-wrapper">

            <h1>Register</h1>
            <?php $validation = \Config\Services::validation(); ?>
            <form class="" action="<?php echo base_url(); ?>/register" method="post">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
                    <?php if ($validation->getError('firstname')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('firstname'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
                    <?php if ($validation->getError('lastname')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('lastname'); ?>
                        </div>
                    <?php } ?>
                </div>



                <div class="form-group">
                    <label for="register">Access Level</label>

                    <?php
                    if ($_SESSION['role'] == 1) {
                    ?>
                        <select class="form-control " required id="level_select" name="level_select">
                            <option value="">Select Access Level</option>
                            <option value="1">Super Admin</option>
                            <option value="2">PRO users</option>
                           <!--  <option value="3">Store Admin - can administer store and add other users</option>
                            <option value="4">Admin Staff - can authorize requisitions</option>
                            <option value="5">Store Attendant - can work in store</option>
                            <option value="6">H.O.D - can make authorize/make requisitions in department</option>
                            <option value="7">Departmental Staff - can make requisitions in department</option> -->
                        </select>
                    <?php
                    }
                    ?>

                    <?php
                    if ($_SESSION['role'] == 2) {
                    ?>
                        <select class="form-control " required id="level_select" name="level_select">
                            <option value="">Select Access Level</option>
                            <option value="3">Store Admin - can administer store and add other users</option>
                            <option value="5">Store Attendant - can work in store</option>
                        </select>
                    <?php
                    }
                    ?>

                    <?php
                    if ($_SESSION['role'] == 3) {
                    ?>
                        <select class="form-control " required id="level_select" name="level_select">
                            <option value="">Select Access Level</option>
                            <option value="5">Store Attendant - can work in store</option>
                        </select>
                    <?php
                    }
                    ?>

                    <?php
                    if ($_SESSION['role'] == 6) {
                    ?>

                        <input type="hidden" id="level_select" name="level_select" value="7">
                        &nbsp; <span class="text-info"> You can register staff who can only make requisitions in the <?= $_SESSION['department'] ?></span>


                    <?php
                    }
                    ?>

                </div>



                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
                    <?php if ($validation->getError('email')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('email'); ?>
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <?php if ($validation->getError('password')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('password'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="form-group">
                    <label for="password_confirm">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                    <?php if ($validation->getError('password_confirm')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('password_confirm'); ?>
                        </div>
                    <?php } ?>
                </div> <br>

                <div class=" form-group">
                    <div class=" row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-success">Register</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>/login">Login</a>
                        </div>
                    </div>
                </div>

            </form>


        </div>
    </div>

    <?php
    if (in_array($_SESSION['role'], [1, 2, 3, 6])) {
    ?>
        <div class="p-3">
            <?php

            if (!empty($reqs)) {
                echo min_page_pagination($pager->links(), $pager_num, "/register"); ?>
                <form action="<?= base_url() ?>/register/modify" method="POST">
                    <div class='table-responsive'>
                        <table class="table table-sm table-bordered table-hover ">
                            <thead class="thead-dark">
                                <tr>
                                    <th>
                                        <input type="checkbox" value="" id="check_all">
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Role
                                    </th>
                                    <th>
                                        Block
                                    </th>
                                    <th>
                                        Manage
                                    </th>

                                </tr>
                            </thead>
                            <tbody> <?php

                                    $cnt = 0;
                                    foreach ($reqs as $stff) {



                                        if ($_SESSION['role'] == 3 && $stff->role != 5) {
                                            continue;
                                        }

                   
                                        if ($_SESSION['role'] == 2 && ($stff->role != 3 && $stff->role != 5)) {
                                            continue;
                                        }

                                        $dept = get_model_rows_by_key(new \App\Models\UserDepartmentModel(), "user_id", $stff->id);


                                        if ($dept) {
                                            $department =  get_model_rows_by_key(new \App\Models\DepartmentsModel(), "id", $dept->department_id);

                                            //pr($department);
                                            //pr($_SESSION['department']);

                                            if (isset($_SESSION['department'])) {
                                                if ($department->name != $_SESSION['department']) {
                                                    continue;
                                                }
                                            } 
                                        }else{
                                            if ($_SESSION['role'] == 6 && $stff->role != 7) {
                                                continue;
                                            }
                                        }

                                        if ($stff->id == $_SESSION['logged_in_user_id']) {
                                            continue;
                                        }


                                    ?><tr>
                                        <td data-title='Selected'>
                                            <input type="checkbox" id="chk_<?= $stff->id ?>" class="id_chk sels" name="sels[]" value="<?= $stff->id ?>">
                                        </td>

                                        <td data-title='Name'>
                                            <?php echo $stff->firstname . " " . $stff->lastname; ?>
                                        </td>

                                        <td data-title='Email'>
                                            <?php echo $stff->email; ?>
                                        </td>

                                        <td data-title='Role'><?= $userauth_mdl->getRoleName($stff->role); ?></td>
                                        <td data-title='Block'><?= $stff->blocked; ?></td>
                                        <td data-title='Manage'>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="#null" onclick="alertConfirm('Block User?','Really sure you wish to block this user?','<?= base_url() ?>/superadmin/user_mod/deactivate/<?= $stff->id ?>/');" id="printed_photo_btn" class="btn <?= ($stff->blocked) ? "btn-warning" : "btn-success" ?>"><?= ($stff->blocked) ? "Unb" : "B" ?>lock</a>
                                                <a href="#null" onclick="alertConfirm('Delete User?','Really sure you wish to delete this user? This action may not be recoverable...','<?= base_url() ?>/superadmin/user_mod/delete/<?= $stff->id ?>/');" class="btn btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    } ?>
                            </tbody>
                        </table>

                        <?= min_page_pagination($pager->links(), $pager_num, "/register"); ?>


                    </div>

                </form>


        </div>

<?php
            }
        }

?>


</div>
<br><br>
<script>
    jQuery(function() {
        do_nav("a.register_nav");
    });
</script>