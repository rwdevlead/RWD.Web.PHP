<?php  
	$headerValue  = "default-src 'self' http://www.w3schools.com https://*.googleapis.com https://*.gstatic.com https://cdnjs.cloudflare.com; ";
	header("Content-Security-Policy: ". $headerValue );
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
	<link rel="stylesheet" type="text/css" href="resources/css/site.css">
</head>
<body>

	<!-- Navigation bar (sit on top) -->
	<div class="w3-top w3-xlarge">
		<ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
			<li>
				<a href="https://realworlddevelopers.com/" class="w3-wide"><i class="fa fa-home w3-margin-right">HOME</i></a>
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

	<!-- Error Section -->
	<div class="w3-container w3-padding-32" >
		<!-- sm/med subtitle -->
		<div class="w3-container w3-hide-medium w3-hide-large">
			<p><h4 class="w3-center w3-text-indigo">Wrong Turn<br>Authorization required.</h4></p>
		</div>
		<!-- large subtitle -->
		<div class="w3-container w3-hide-small">
			<p></h1>
			<h1 class="w3-center w3-text-indigo">Did you get lost? <br />No worries, <a href="https://realworlddevelopers.com/">click here to get back home</a>.</h1></p>
		</div>
	</div>
 
 
</body>
</html>
