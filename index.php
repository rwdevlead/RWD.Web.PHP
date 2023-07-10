<?php
	// you want all errors to be triggered
	error_reporting(E_ALL); 
	
	define('DEBUG', true);
	ini_set('display_errors', DEBUG ? 1 : 0);

	set_exception_handler('exception_handler');
	function exception_handler($exception)
	{
		echo $exception->getMessage();
	}

	session_start();  
	$nonce = uniqid();
	$headerValue  = "default-src 'none'; ";
	$headerValue .= "manifest-src 'self'; ";
	$headerValue .= "font-src 'none'; ";
	$headerValue .= "script-src 'none'; ";
	$headerValue .= "style-src 'self' https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css; ";
	$headerValue .= "img-src 'self'; ";
	$headerValue .= "frame-src 'none'; ";
	header("Content-Security-Policy: ". $headerValue );
	header('X-FRAME-OPTIONS: DENY');
	header('X-Content-Type-Options: nosniff');
	header("X-XSS-Protection: 1");

	$validation_name = 'token-' . mt_rand();
	$validation_token = bin2hex(random_bytes(32));
	$_SESSION[$validation_name] = $validation_token;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Real World Developers</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/site.css">	
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

	<header class="mb-4">
		<img class="img-fluid" src="resources/images/rwdevs-header.jpg" alt="RealWorldDevelopers Logo">
	</header>
		 
	<div class="card-columns custom-columns">

		<div class="card">
			<div class="card-header">
				<h1>NuGet Packages</h1>
			</div>
			<div class="card-body">
				<div class="h4 card-title text-primary">Real World Developers</div>
				<p class="card-text">I have create a NuGet packages to share some of my common code with others.</p>
				<a href="https://www.nuget.org/profiles/RealWorldDevelopers" class="stretched-link">
					<img class="img-fluid" alt="Get it from Nuget" src="resources/images/appstore/nuget.png" />
				</a>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h1>Source Code</h1>
			</div>
			<div class="card-body">
				<div class="h4 card-title text-primary">Real World Developers</div>
				 <p> I store a lot of my application source code on GitHub to share with others.</p>
				 <a href="https://github.com/RealWorldDevelopers" class="stretched-link">
					<img class="img-fluid" alt="See my code on Github" src="resources/images/appstore/GitHub_Logo.png" />
				</a>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h1>Snippets</h1>
			</div>
			<div class="card-body">
				<div class="h4 card-title text-primary">Real World Developers</div>
				 <p> I store a lot of my snippets of code on Gist (GitHub) to share with others.</p>
				<a href="https://gist.github.com/RealWorldDevelopers" class="stretched-link">
					<img class="img-fluid" alt="See my snippets on Github:Gist" src="resources/images/appstore/Octocat.png" />
				</a>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
				<h1>Giving Back</h1>
			</div>
			<div class="card-body">
				<div class="h4 card-title text-primary">Real World Developers</div>
				<p>
					I have gotten a lot of guidance from other developers over the years.  So I try to return the favor whenever I can. One way I like to do that is
					through peer assistance at StackoverFlow
				</p>
				<a href="https://stackoverflow.com/users/4505594/jstevens" class="stretched-link">
					<img class="img-fluid" alt="My Contributions on StackOverflow" src="resources/images/appstore/so-logo.png" />
				</a>
			</div>
		</div>

	</div>
 

</body>
</html>
