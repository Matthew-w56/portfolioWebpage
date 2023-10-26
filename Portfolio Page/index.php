<?php 
include_once("php/functions.php");
begin_session();
?>

<!doctype html>
<html>
	<head>
		<title>Matthew Williams | Coder and Student</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family='Varela Round'">
		<link rel="icon" type="image/x-icon" href="img/favicon.ico">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo rand(10,99) . '-' . rand(10, 99);?>">
		<script src="js/bootstrap.bundle.js"></script>
		<script src="js/index.js" defer></script> <!-- personal JS file -->
	</head>
	
	<body>
		<?php
		
		if (isset($_GET['tryMail'])) {
			if (mail("mbwilliams226@gmail.com", "Test Message!", "Did this actually send?", "From: mbwilliams785@gmail.com")) {
				echo("<p>YAYAYAYAYAYAYYAYAY</p>");
			} else {
				echo("<p>NONOONONONO</p>");
			}
		}
		
		if (isset($_GET['submit'])) {
			echo '<div id="info-mess" class="info-message alert alert-success alert-dismissible fade show hidden" role="alert">
			<strong>Success!</strong>  Message sent.  Talk to you soon!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';
			// db_inc_forms_filled();
		}
		
		?>
		

		<!------------------------------ Nav Section / Header ----------------------------- -->

		<?php echo mainNav(); ?>

		<!--------------------------- Intro Section / Main Section --------------------------- -->

		<div class="container-fluid intro ml-lg-4">
			<div class="row row-cols-1 row-cols-lg-2 justify-content-around gx-5">
				<div class="col col-lg-7">
					<div class="row">
						<div class="intro-text shadow p-3">
							<h3 style="margin-left: 20px; color: #353535;">Hey!  My name is</h3>
							<h1 class="text-center center-name">Matthew Williams</h1>
							<h5 style="text-align: right; margin-right: 15px; color: #454545; margin-bottom: 0px; margin-top: 5px;">Programmer, Student, Designer.</h5>
						</div> <!-- intro-text -->
					</div> <!-- row -->
					<div class="row">
						<div class="intro-subtext d-block">
							<p>I am a Software Development Student with <b>8+</b> years of coding experience.  
								From <b>Machine Learning</b> to <b>Front-End</b> to <b>Data Management</b>, project-based learning 
								has been my primary instructor</p>
							<div class="buttons d-inline">
								<a href="contact.php" class="contact-button btn btn-primary">Contact me</a>
								<a href="resume.php" class="see-resume btn">See my resume</a>
								<!-- <?php /*  echo screenSizeIndicator();  */ ?> -->
							</div> <!-- buttons -->
						</div> <!-- intro-subtext -->
					</div> <!-- row -->
				</div> <!-- col -->
				<div class="col col-lg-5">
					<div class="intro-img shadow-sm">
						<img src="img/center-photo.png" style="width: 100%;" class="shadow">
					</div> <!-- intro-img -->
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- intro -->

		<!------------------------------ Indicator Section ---------------------------------------- -->

		<div id="indicator" class="indicator text-center">
			<div class="indicator-content" id="scroll-dest">
				<a href="#scroll-dest" style="text-decoration: none;"><p class="d-none d-lg-block">scroll</p>
				<img src="img/scroll.png" class="d-none d-lg-inline"></a>
			</div>
		</div>

		<!------------------------------ Scrolldown Section ---------------------------------------- -->

		<div class="info-scrolldown container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col">
					<img src="img/full-stack-development.jpg" class="scrolldown-img" style="margin-left: 160px;">
				</div>
				<div class="col">
					<div class="scrolldown-content container">
						<h2>Full-Stack Exposure</h2>
						<p>My <b>Curiosity</b> has lead me to gain exposure to every side of software including databases, 
							application logic, UX design, and more</p>
						<a href="contact.php" class="btn btn-primary">Contact me</a>
					</div> <!-- scrolldown-content -->
				</div> <!-- col -->
			</div> <!-- row -->
			<div class="row">
				<div class="col d-flex justify-content-center">
					<div class="scrolldown-content container">
						<h2>Project-Based Learning</h2>
						<p>I build <b>Product Ready</b> applications, interfaces, and models that provide value and perform 
							functions beyond the scope of an educational tutorial</p>
						<a href="contact.php" class="btn btn-primary">Contact me</a>
					</div>
				</div>
				<div class="col">
					<img src="img/project-based.JPG" class="scrolldown-img">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<img src="img/code-editor.png" class="scrolldown-img code-editor-img">
				</div>
				<div class="col">
					<div class="scrolldown-content container">
						<h2>Experienced Learner</h2>
						<p>Given my experience in project based learning, I have improved my ability to <b>learn new
							 technologies as I work on a project</b>, while maintaining a strong attention to detail</p>
						<a href="contact.php" class="btn btn-primary">Contact me</a>
					</div> <!-- scrolldown-content -->
				</div> <!-- col -->
			</div> <!-- row -->
		</div> <!-- info-scrolldown -->

		<!------------------------------ Recent Projects Section ---------------------------------------- -->

		<div class="recent-projects text-center">
			<h1>Looking for what I am up to now?</h1>
			<p>My most current project is an on-going study of <b>Machine Learning</b> models and how they work.
				  In order to make sure I fully understand them, I am coding working models in Python.  See the
				   code in the "Machine Learning" link below</p>
		</div>

		<!------------------------------ Gradient Section ---------------------------------------- -->

		<div class="gradient"></div>

		<!------------------------------ Cards Section ---------------------------------------- -->

		<div class="card-section container-fluid px-md-3 px-xl-0 gy-2">
			<h1 class="text-center card-section-title">Projects and Links</h1>
			<div class="row row-cols-2 row-cols-md-4 justify-content-around gy-sm-2 gy-5 gx-2 gx-md-1 gx-xl-0">
				<div class="col-xl-3 offset-xl-1">
					<?php echo card("Resume", "See my experience, prior education, and my contact info on my resume, without the need for a download",
								"resume.php", "Read Now");?>
				</div> <!-- col -->
				<div class="col-xl-3">
					<?php echo card("Machine Learning", "My repository of machine learning models that I studied theoretically, then made myself",
								"https://github.com/Matthew-w56/machineLearningFromScratch", "Check It Out", ' target="_blank"');?>
				</div> <!-- col -->
				<div class="col-xl-3">
					<?php echo card("Github Link", "Explore my Github account and view my projects' code.",
								"https://github.com/Matthew-w56/", "See Github", ' target="_blank"');?>
				</div> <!-- col -->
				<div class="col-xl-1"></div>
			</div> <!-- row -->
			<div class="row row-cols-2 row-cols-md-4 justify-content-around gy-sm-2 gy-5 gx-2 gx-md-1 gx-xl-0">
				<div class="col-xl-3 offset-xl-1">
					<?php echo card("Front End", "Github link to the code to a previous version of this page, made for a class",
								"https://github.com/Matthew-w56/portfolioWebpage", "Check It Out", ' target="_blank"');?>
				</div> <!-- col -->
				<div class="col-xl-3">
					<?php echo card("Video Games", "Repository containing the source code to a 2D game I made implementing Dynamic Rendering",
								"https://github.com/Matthew-w56/TwoDWorld", "Check It Out", ' target="_blank"');?>
				</div> <!-- col -->
				<div class="col-xl-3">
				<?php echo card("Block Chain", "Blockchain, or Web 3, is a growing area with unique applications and programming languages.  See my projects!",
							"https://github.com/Matthew-w56/reentrancyAttack", "Check It Out", ' target="_blank"');?>
				</div> <!-- col -->
				<div class="col-0 col-xl-1"></div>
			</div> <!-- row -->
		</div> <!-- card-section -->

		<!------------------------------ Footer Section ----------------------------------------- -->

		<?php echo footer(); ?>

	</body>
</html>
