<!DOCTYPE HTML>
<html>

<head>
	<title>LitCloud</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" media="all">
	<link rel="stylesheet" type="text/css" href="toastr/toastr.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="toastr/toastr.js"></script>

	<style>
		.custom-x::before {
			content: "X";
			font-family: Arial, sans-serif;
			font-size: 1em;
			font-weight: bold;
			color: #000;
		}

		.custom:hover {
			background-color: #f56a6a;
		}
	</style>
<?php

if(!isset($_SESSION['logged_in'])){
	$_SESSION['logged_in'] = false;
}

?>
</head>

<body class="is-preload" >

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Header -->
				<header id="header">
					<a href="home" class="logo"><strong>LitCloud</strong></a>
					<ul class="icons">
						<li><a href="#" class="icon brands custom-x"><span class="label">X</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a>
						</li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<?php if($_SESSION['logged_in'] == false) { ?>						
						<li><a href="login" class="button">Login</a></li>
						<?php }else{ ?>
						<li><a href="logout" class="button">Log out</a></li>
						<?php } ?>

						</ul>
				</header>