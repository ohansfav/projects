<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">

	<title>Whoops!</title>

	<style type="text/css">
		<?= preg_replace('#[\r\n\t ]+#', ' ', file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'debug.css')) ?>
	</style>
</head>
<body>

	<div class="container text-center">
<h1 class="headline">Oops...</h1>
		<div style="width: 400px; text-align:center; margin:0px auto;"><img src="<?php echo base_url('splash/images/error.gif'); ?>" style="width: 100%;"></div>
		
		<p class="lead">This is not normal! Please try again...</p>
		<p class="">If it wasn't your fault, please tell someone in charge what went wrong here:<br><br><span style="color:red"> <?= esc($message) ?></span></p>

	</div>

</body>

</html>
