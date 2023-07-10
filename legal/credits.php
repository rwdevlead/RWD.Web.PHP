<?php  
  $nonce = uniqid();
	header("Content-Security-Policy: default-src 'self' 'nonce-$nonce' http://www.w3schools.com https://*.googleapis.com https://*.gstatic.com https://cdnjs.cloudflare.com");
	header('X-FRAME-OPTIONS: DENY');
	header('X-Content-Type-Options: nosniff');
	header("X-XSS-Protection: 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Real World Developers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../resources/css/site.css">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=PY4Ka6QGYv">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=PY4Ka6QGYv">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png?v=PY4Ka6QGYv">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=PY4Ka6QGYv">
	<link rel="manifest" href="/manifest.json?v=PY4Ka6QGYv">
	<link rel="mask-icon" href="/safari-pinned-tab.svg?v=PY4Ka6QGYv" color="#5bbad5">
	<link rel="shortcut icon" href="/favicon.ico?v=PY4Ka6QGYv">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png?v=PY4Ka6QGYv">
	<meta name="theme-color" content="#ffffff">
</head>
<body>

	<!-- Navigation bar (sit on top) -->
	<div class="w3-top w3-xlarge">
		<ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
			<li>
				<a href="https://realworlddevelopers.com" alt="Go to Home Page" title="Go to Home Page" class="w3-wide">
					<i class="fa fa-home w3-margin-right">HOME</i>
				</a>
			</li>
		</ul>
	</div>

	<!-- Home -->
	<div id="home"></div>

	<!-- Header large -->
	<header class="bgimg-1 w3-display-container w3-grayscale-min w3-hide-small w3-hide-medium"> 
	</header>

	<!-- Header medium  -->
	<header class="bgimg-2 w3-display-container w3-grayscale-minw w3-hide-small w3-hide-large"> 
	</header>

	<!-- Header small -->
	<header class="bgimg-3 w3-display-container w3-grayscale-minw w3-hide-medium w3-hide-large"> 
	</header>
 
	<!-- Credits Section -->
	<div class="w3-container w3-padding-32" id="credits">
		<!-- sm/med subtitle -->
		<div class="w3-container w3-hide-medium w3-hide-large">
			<h4 class="w3-center w3-text-indigo">Giving Credit Where Credit is Due</h4>
		</div>
		<!-- large subtitle -->
		<div class="w3-container w3-hide-small">
			<h1 class="w3-center  w3-text-indigo">We would like to give credit to all those who helped make our efforts possible.</h1>
		</div>
		<div class="w3-row-padding w3-center w3-section" >
			<div class="w3-quarter">
				<i class="fa fa-file-picture-o w3-margin-bottom w3-jumbo w3-center"></i>
				<p>Vector Graphics by <a href="http://www.flaticon.com">flaticon.com</a>. <br>Under <a href="http://creativecommons.org/licenses/by/3.0/">CC</a>: <a data-file="scale-measurement" href="http://www.freepik.com">Freepik</a></p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-font w3-margin-bottom w3-jumbo"></i>
				<p>Styles by <a href="http://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>	
			</div>
			<!--
			<div class="w3-quarter">
				<i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
				<p class="w3-large">Quality</p>
				<p>Software that crashes just isn't acceptable.  We thoroughly test each release to ensure defect free applications.  </p>
			</div>
			<div class="w3-quarter">
				<i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
				<p class="w3-large">Function</p>
				<p>Intuitive design means you won't have to read any instructions to know how to use of software.  Our application almost read your mind.</p>
			</div>
			-->
		</div>
	</div>

	<!-- Footer -->
	<footer class="w3-center w3-dark-grey w3-padding-64">
		<p><a href="#home" alt="Go to Top of Page" title="Go to Top of Page"  class="w3-hover-text-green">Back to Top</a></p>	  
		<div id="gotoTop" class="w3-tooltip w3-right">
			<span class="w3-text w3-padding w3-hide-small">Go To Top</span>   
			<a class="w3-btn w3-padding w3-dark-grey w3-hover-grey" href="#home"><span class="w3-xlarge"><i class="fa fa-chevron-circle-up"></i></span></a>
		</div>
	</footer>
 
</body>
</html>
