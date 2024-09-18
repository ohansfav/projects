<?php
//pr($account);
?>
  <div class="container-fluid py-4">
      <div class="row">

      <div class="col-md-4">
          <div class="card card-profile">
            <img src="../assets/img/bg3.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n2 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="../<?=$account->photo_path ? $account->photo_path : "assets/img/nouser.jpg"?>" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>

            <div class="<?= is_file($account->photo_path) ? "": "d-none"?> card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
             
            <div class="">
                <a href="<?=base_url('remove_profile_photo/'.$account->id)?>" class="btn btn-sm btn-danger mb-0">Remove Photo</a>
              </div>
            </div>
            <div class="card-body pt-0">
              <!-- <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">22</span>
                      <span class="text-sm opacity-8">Friends</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">10</span>
                      <span class="text-sm opacity-8">Photos</span>
                    </div>
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">89</span>
                      <span class="text-sm opacity-8">Comments</span>
                    </div>
                  </div>
                </div>
              </div> -->
              <div class="text-center mt-4">
                <h5>
                <?=ucwords($account->firstname . " " . $account->lastname)?><span class="font-weight-light"> </span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?=ucwords($account->state . (($account->country)?($account->city?", ":"").$account->country:""))?>
                </div>
                <div class="h6 mt-4 <?=empty($account->occupation)?"d-none":""?>">
                  <i class="ni business_briefcase-24 mr-2"></i><?=ucwords($account->occupation)?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="text-end p-3">
                <h5 class="mb-0 thintext">Edit Profile</h5>
              </div>
            </div>

            <form action="<?=url_to('update_profile')?>" method="post" enctype="multipart/form-data" role="form">
            <input type="hidden" name="id" value="<?=$account->id?>">
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Contact Email address</label>
                    <input class="form-control" type="email" name="email" value="<?=ucwords($account->email)?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nickname</label>
                    <input class="form-control" type="text" name="nickname"  value="<?=ucwords($account->nickname)?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">First name</label>
                    <input class="form-control" type="text" name="firstname"  value="<?=ucwords($account->firstname)?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Last name</label>
                    <input class="form-control" type="text" name="lastname"  value="<?=ucwords($account->lastname)?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Occupation</label>
                    <input class="form-control" type="text" name="occupation"  value="<?=ucwords($account->occupation)?>">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">Contact Information</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address</label>
                    <input class="form-control" type="text" name="address"  value="<?=ucwords($account->address)?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Phone</label>
                    <input class="form-control" type="text" name="phone" value="<?=ucwords($account->phone)?>">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" type="text" name="city"  value="<?=ucwords($account->city)?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">State</label>
                    <input class="form-control" type="text" name="state"  value="<?=ucwords($account->state)?>">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" type="text" name="country"  value="<?=ucwords($account->country)?>">
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
              <p class="text-uppercase text-sm">About me</p>
              <div class="row">
                <div class="col-md">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">About me</label>
                    <input class="form-control" type="text" name="about"  value="<?=ucwords($account->about)?>">
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-group">
                  <div class="">
                <label for="formFile" class="form-label">Upload Photo</label>
                <input class="form-control" type="file" name="photo" id="photo" >
              </div>
                  </div>
                </div>
                <div class="col-md text-center"><br><button class="btn btn-primary btn-lg ms-auto">Update</button></div>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>

    </div>