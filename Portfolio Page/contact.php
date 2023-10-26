<?php
include_once("php/functions.php");
begin_session();
?>

<!doctype html>
<html>
	<head>
		<title>Contact Me | Matthew Williams</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Varela Round'">
		<link rel="icon" type="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="./css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/contact.css?v=<?php echo rand(10,99) . '-' . rand(10, 99);?>">
		<script src="./js/bootstrap.bundle.js"></script>
	</head>

	<body>

		<?php echo mainNav(); ?>

		<div class="main-content container-fluid">
			<h1 class="text-center">Get in touch with me</h1>
			<h5 class="text-center">Feel free to reach out via email, call, or text.  I will try to get back to you as soon as possible.</h5>
			
			<div class="contact-methods-wrapper">
				<h3>Matthew Williams</h3>
				<p><img class="contact-star" src="img/asterisk.svg"> mbwilliams226@gmail.com</p>
				<p><img class="contact-star" src="img/asterisk.svg"> (801) 750-5925</p>
				<p><img class="contact-star" src="img/asterisk.svg"> MattbWilliams.wuaze.com</p>
			</div>

		<?php echo footer(); ?>

	</body>

</html>
