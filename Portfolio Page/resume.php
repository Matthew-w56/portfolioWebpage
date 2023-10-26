<?php
include_once("php/functions.php");
begin_session();
?>

<!doctype html>
<html>
	<head>
		<title>Resume | Matthew Williams</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Varela Round'">
		<link rel="icon" type="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/resume.css?v=<?php echo rand(10,99) . '-' . rand(10, 99);?>">
		<script src="js/bootstrap.bundle.js"></script>
	</head>

	<body>
		
		<?php echo mainNav(); ?>

		<div class="main-content container text-center">
			<embed
			src="img/matthew-williams-resume.pdf#toolbar=0&navpanes=0"
			type="application/pdf"
			scrolling="auto"
			height="1050px"
			width="100%"
			class="resume"
			></embed>
		</div>

		<?php echo footer(); ?>
		
	</body>
</html>
