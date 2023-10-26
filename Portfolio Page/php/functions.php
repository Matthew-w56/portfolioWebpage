<?php
// Note: All DB interaction is disabled while it still is not up.  Just need to stand one up on the hosting site
// include_once("php/db.php");

/*  "File Or Hashtag".  Returns a hashtag if the file name is the same as this page, or the file name otherwise
	Helps make the Navigation bar links dynamic  */
function foh($name) {
	return ($_SERVER['PHP_SELF'] == $name ? '#' : $name);
}

/*  Returns the HTML for the main navigation bar  */
function mainNav() {
	return '
		<nav id="main-nav" class="navbar navbar-expand-lg navbar-dark mt-1 px-3 shadow-sm">
			<div class="container-fluid">
				<a href="'.foh('/index.php').'" class="navbar-brand mx-5 d-inline d-sm-flex"><h4 class="icon-name">Matthew Williams</h4></a>
				<button type="button" class="navbar-toggler shadow-sm" data-bs-toggle="collapse" data-bs-target="#links">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div id="links" class="d-lg-flex collapse navbar-collapse" style="box-sizing: border-box;">
					<a class="nav-link" href="'.foh('/index.php').'">Home Page</a>
					<a class="nav-link btn btn-primary text-white" href="'.foh('/contact.php').'">Contact Me</a>
					<a class="nav-link" href="'.foh('/resume.php').'">Resume</a>
					<a class="nav-link" href="https://github.com/Matthew-w56/" target="_blank" rel="noopener noreferrer">Github</a>
				</div> <!-- d-flex (links) -->
			</div> <!-- container-fluid -->
		</nav> <!-- main-nav -->
	';
}

/*  Returns the HTML for the footer section used by the site  */
function footer() {
	return '
		<footer class="shadow">
			<div class="container-fluid footer-content row">
				<div class="footer-icon col-4">
					<h2 class="footer-name">Matthew Williams</h2>
				</div>
				<div class="footer-text d-inline col-4 text-center">
					<p>Webpage made by and for Matthew Williams</p>
				</div>
				<div class="col-2 offset-2">
					<p>Created August 2022</p>
				</div>
			</div>
		</footer>
	';
}

/*  Returns a simple card from the Bootstrap CSS file.
	(Addition is any optional anchor tag attributes but is currently used for _target="blank"  */
function card($title, $paragraph, $link, $button_text, $addition="") {
	return '
		<div class="card shadow-sm">
			<div class="card-body">
				<h5 class="card-title text-center">'.$title.'</h5>
				<div class="container-fluid gray-strip"></div>
				<p class="card-text">'.$paragraph.'</p>
				<a href="'.$link.'"'.$addition.' class="btn btn-primary">'.$button_text.'</a>
			</div>
		</div>
	';
}

/*  Returns a set of P tags that are set up so only a single tag that says what size this screen is will display  */
function screenSizeIndicator() {
	return '
		<!--div class="screen-size-indicator">
			<p class="d-block d-sm-none">Extra Small</p>
			<p class="d-none d-sm-block d-md-none">Small</p>
			<p class="d-none d-md-block d-lg-none">Medium</p>
			<p class="d-none d-lg-block d-xl-none">Large</p>
			<p class="d-none d-xl-block">Extra Large</p>
		</div> <!-- screen-size-indicator -->
	';
}

function inc_visits() {
	if (empty($_COOKIE['same'])) {
		setcookie('same', 'yup', 60*60);
		// db_mark_visit();
	}
}

function begin_session() {
	// Start the session whether or not it's their first page today
	session_start();
	// If the user just showed up to the page
	if (empty($_SESSION['init'])) {
		inc_visits();
		$_SESSION['init'] = 1;
	}
	
}

?>