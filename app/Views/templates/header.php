<!DOCTYPE HTML>
<html>

<head>
  <title><?= $_SERVER['appTitle']; ?> - <?= $_SERVER['appCompany']; ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <meta content="FMC Asaba Website is developed by the IT Department of FMC Asaba to digitally showcase the Federal Medical Centre Asaba with ease. Bringing you newsworthy information and a swift medium through which FMC Asaba can be reached, researched and relief on to provide a solution to medical issues. " name="description">
  <meta content="FMC Asaba Website, website, official" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url(); ?>/splash/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/splash/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/vendor/DataTables/datatables.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/css/magnific/magnific-popup.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/jqueryconfirm/jquery-confirm.min.css">
  <!-- Template Main CSS File -->
  <link href="<?php echo base_url(); ?>/splash/vendor/bootstrap4/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/splash/vendor/bootstrap-switch-button/bootstrap-switch-button.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/splash/vendor/select2/css/select2.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/splash/vendor/croppie/croppie.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/splash/vendor/trumbowyg/ui/trumbowyg.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/splash/css/fontawesome-all.min.css" rel="stylesheet">
  <script src="<?php echo base_url(); ?>/splash/js/jquery-3.6.0.min.js"></script>
  <script src="<?php echo base_url(); ?>/splash/js/chart.min.js"></script>
  <script src="<?php echo base_url(); ?>/splash/css/magnific/jquery.magnific-popup.js"></script>
  <script src="<?php echo base_url(); ?>/vendor/DataTables/datatables.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/assets/css/LineIcons.2.0.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/assets/css/tiny-slider.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/assets/css/animate.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/assets/css/lindy-uikit.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/assets/css/benny.css" />

  <script src="<?php echo base_url(); ?>/splash/js/sweetalert.min.js"></script>


  <script src="<?php echo base_url(); ?>/splash/jqueryconfirm/jquery-confirm.min.js"></script>

  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/lib/themes/default.css" id="theme_base">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/lib/themes/default.date.css" id="theme_date">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/lib/themes/default.time.css" id="theme_time">


  <noscript>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/splash/css/noscript.css" />
  </noscript>
</head>

<body>

  <div id="loadingdiv" style="display:none">

    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: transparent none repeat scroll 0% 0%; display: block;" width="331px" height="331px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
      <circle cx="50" cy="50" r="0" fill="none" stroke="#020621" stroke-width="2">
        <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;39" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="0s"></animate>
        <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="0s"></animate>
      </circle>
      <circle cx="50" cy="50" r="0" fill="none" stroke="#2bde73" stroke-width="2">
        <animate attributeName="r" repeatCount="indefinite" dur="1s" values="0;39" keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="-0.5s"></animate>
        <animate attributeName="opacity" repeatCount="indefinite" dur="1s" values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline" begin="-0.5s"></animate>
      </circle>
    </svg>

  </div>


  <script>
    var do_nav = "";



    function alertError(title_in, msg) {

      swal({
        title: title_in,
        text: msg,
        icon: "error",
        dangerMode: false,
      });
    }

    function alertInfo(title_in, msg, func) {

      swal({
        title: title_in,
        text: msg,
        icon: "info",
        dangerMode: false,
      }).then(val => {
        if (val) {
          if (func) {
            func();
          }
        }
      });
    }



    function submitConfirm(title_in, msg, formObj) {


      swal({
          title: title_in,
          text: msg,
          icon: "warning",
          dangerMode: true,
          buttons: true
        })
        .then(val => {
          if (val) {
            console.log(formObj);
            formObj.submit();
            return true;
          }
        });


    }

    function alertConfirmOnly(title_in, msg, func) {


      swal({
          title: title_in,
          text: msg,
          icon: "warning",
          dangerMode: true,
          buttons: true
        })
        .then(val => {
          if (val) {
            if (func) {
              func();
            }
          }
        });
    }


    function alertConfirm(title_in, msg, url_execute, func2) {

      swal({
          title: title_in,
          text: msg,
          icon: "warning",
          dangerMode: true,
          buttons: true
        })
        .then(val => {
          if (val) {
            location.href = url_execute;
          } else {
            if (func2) {
              if (func2) {
                func2();
              }
            }
          }
        });
    }


    jQuery(function() {

      jQuery(".bennytip i").click(function() {
        jQuery(this).parent().find("span").toggle(200, function() {
          jQuery(this).parent().hide(500);
        });
      });


      do_nav = function(el) {

        jQuery("nav a").removeClass("active");
        jQuery("nav a").addClass("inactive");
        jQuery(el).removeClass("inactive");
        jQuery(el).addClass("active");

      };

      jQuery('.datepicker').pickadate({
        format: 'd mmmm, yyyy',
        formatSubmit: 'yyyy-mm-dd',
        closeOnSelect: true,
        closeOnClear: true,
        hiddenName: true
      });

      jQuery(".select2").select2({
        minimumInputLength: 3
      });

      jQuery('[data-toggle="tooltip"]').tooltip()

      jQuery(".select2_show").select2({

      });
    });
  </script>

  <?php $uri = service('uri') ?>
  <?php

  $this->config = config('Auth');



  $redirect = $this->config->assignRedirect;
  // pr(  $redirect);

  //pr(session()->get('role'));



  ?>

  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ========================= preloader start ========================= -->
    <a id="topper"></a>
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================= preloader end ========================= -->

    <!-- ========================= hero-section-wrapper-5 start ========================= -->
    <section id="home" class="hero-section-wrapper-5">

      <!-- ========================= header-6 start ========================= -->
      <header class="header header-6   <?= !url_is("home") ? "not_home" : "" ?> ">
        <div class="navbar-area">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                  <div class='row'>
                    <div class='col-10 col-md'>
                      <a class="navbar-brand" href="<?php echo base_url(); ?>/home#home">
                        <img style="width:100%" src="<?php echo base_url(); ?>/splash/assets/img/logo/logo.svg" alt="Logo" />
                      </a>
                    </div>
                    <div class='col-auto text-right'>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent6" aria-controls="navbarSupportedContent6" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                      </button>
                    </div>
                  </div>


                  <?php
                  $addfull_url = "";

                  // pr(url_is("home/department/*") );

                  if (!url_is("home")) {
                    $addfull_url = base_url() . "/home";
                  }

                  ?>
                  <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent6">
                    <ul id="nav6" class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="page-scroll <?= url_is("home") ? "active" : "" ?>" href="<?= $addfull_url ?>#home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll <?= url_is("home/about") || url_is("home/staffstrength") || url_is("home/achievements")  ? "active" : "" ?>" href="<?= $addfull_url ?>#about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll <?= url_is("home/team") ? "active" : "" ?>" href="<?= $addfull_url ?>#team">Management Team</a>
                      </li>
                      <li class="nav-item">
                        <a class="page-scroll <?= url_is("home/department/*") ? "active" : "" ?>" href="<?= $addfull_url ?>#departments">Departments</a>
                      </li>

                      <li class="nav-item">
                        <a class="page-scroll <?= url_is("home/news") || url_is("home/news_more/*")  ? "active" : "" ?>" href="<?= $addfull_url ?>#news">News</a>
                      </li>

                      <li class="nav-item">
                        <a class=" <?= url_is("home/gallery") || url_is("home/gallery_view/*") ? "active" : "" ?>" href="<?= base_url() ?>/home/gallery">Gallery</a>
                      </li>

                      <li class="nav-item">
                        <a class="page-scroll " href="<?= $addfull_url ?>#contact">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="  " href="#topper" id="searcher_open"><i class="fa fa-search"></i></a>
                      </li>


                      <?php
                      if (!isset($_SESSION['logged_in_user_id'])) {
                      ?><li class="nav-item">
                          <a class="<?= url_is("login") ? "active yeah" : "" ?>" href="<?php echo base_url(); ?>/login"> Sign&nbsp;In</a>
                        </li>
                      <?php
                        //pr(current_url());
                        //pr(url_is("login"));
                      } else {
                      ?>

                        <li class="nav-item"> <a class="" href="<?php echo base_url(); ?>/dashboard/profile"> Profile</a>
                        </li> <?php
                              if ($_SESSION['role'] == 1) {
                              ?>
                          <li class="nav-item"> <a class="" href="<?php echo base_url(); ?>/dashboard_superadmin"> Dashboard</a>
                          </li> <?php
                              } else {
                                ?>
                          <li class="nav-item"> <a class="" href="<?php echo base_url(); ?>/dashboard"> Dashboard</a>
                          </li>
                        <?php
                              } ?> <li class="nav-item">
                          <a class="" href="<?php echo base_url(); ?>/logout"> Sign&nbsp;Out</a>
                        </li>
                      <?php

                      }
                      ?>
                    </ul>
                  </div>


                  <!-- navbar collapse -->
                </nav>
                <!-- navbar -->
              </div>
            </div>
            <!-- row -->
          </div>
          <!-- container -->
        </div>
        <!-- navbar area -->
      </header>
      <?php


      if (!url_is("home")) {

      ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      <?php

      }




      if (isset($_SESSION['searchtext'])) {
        $searchtext = $_SESSION['searchtext'];
      }


      ?>

      <div id="searcher" style="display: none;" class=" p-4">
        <form class="m-4 p-4" action="<?php echo base_url(); ?>/home/searcher/">
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa fa-search"></i></span>
            </div>
            <input type="text" class="form-control" value="<?= isset($searchtext) ? $searchtext : "" ?>" name="searchtext" aria-label="Search text" aria-describedby="inputGroup-sizing-lg">
            <div class="input-group-append">
              <button class="btn btn-success" type="submit" id="button-addon2">Go</button>
            </div>
          </div>

        </form>
        <div class="text-center"><a href="#nnnn" id="close_searcher" class="text-danger p-5"><i class="fa fa-times-circle fa-3x"></i></a></div>
      </div>
