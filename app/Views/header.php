<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>University of Agbor E-Library</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
	<link href="<?= base_url(); ?>/assets/fontawesome-all.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/jquery-3.6.0.min.js"></script>
	<script src="<?= base_url(); ?>/assets/js/sweetalert.min.js"></script>
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
</head>

	<?php 
		if(!isset($_SESSION['logged_in'])){
			$_SESSION['logged_in'] = false;
		}
		?>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Header -->
				<header id="header">
					<a href="home" class="logo"><strong>University E-Library</strong></a>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a>
						</li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
						
						<?php if($_SESSION['logged_in'] == false) { ?>

							<li><a href="./signin" class="button">Signin</a></li>

						<?php } ?>
						<!-- <li><a href="./signin" class="button">Signin</a></li> -->
					</ul>

					<br>

					<!-- <button class="login" width="28px" !important > LOGIN </button> -->
					<!-- a href="#" class="button big" -->
					<!-- <ul class="actions">
						<li><a href="signin" class="button">register</a></li>
					</ul> -->
				</header>

		