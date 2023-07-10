<?php  
	session_start();
	$nonce = uniqid();
	$headerValue  = "default-src 'self' https://www.w3schools.com https://*.googleapis.com https://*.gstatic.com https://cdnjs.cloudflare.com; ";
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
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="resources/css/site.css">
</head>    
<body> 

	<!-- Navigation bar (sit on top) -->
	<div class="w3-top w3-xlarge">
		<ul class="w3-navbar w3-white w3-card-2" id="myNavbar">
			<li>
				<a href="index.html#contact" class="w3-wide"><i class="fa fa-home w3-margin-right">HOME</i></a>
			</li>
		</ul>
	</div>

	<!-- Home -->
	<div id="home"></div>
	
	<?php	
		
		// must come in as a post
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				 
			// set deliver to email address
			$email_to = "realworlddevs@outlook.com";     
			
			$display_message = "unknown error ?";
			$error_message = "";

			function died($error) {
				$msg = "We are very sorry, but there were error(s) found with the form you submitted. ";
				$msg.= "These errors appear below.<br /><br />";
				$msg.= "<strong>".$error."</strong><br /><br />";
				$msg.= "Please go back and fix these errors.";
				return $msg;
			}

			// sanitize input data
			function clean_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			// validate security token
			if (isset($_POST['_csrfname']) && 
				isset($_POST['_csrfvalue']) &&
				isset($_SESSION[$_POST['_csrfname']]) && 
				$_SESSION[$_POST['_csrfname']] === $_POST['_csrfvalue'] && 
				$_POST['_csrfvalue'] !== '') {
				$error_message = "";
			} else {
				$error_message = 'CSRF token validation failed.<br />'; 
				//throw new Exception('CSRF token validation failed');
			}

			// validate captcha
			//if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
			//	$captchaKey = '6LckGTAUAAAAAELPzAIlvfGSFrAYH_nATIqvbEAd';
			//	//get verify response data
			//	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$captchaKey.'&response='.$_POST['g-recaptcha-response']);
			//	$responseData = json_decode($verifyResponse);
			//	if(!$responseData->success){					
			//		$error_message = 'Robot verification failed, please try again.<br />';
			//	}
			//}
			//else{
			//	$error_message = 'Please click on the reCAPTCHA box.<br />';
			//}
				 
			// validation expected data 
			if(!isset($_POST['name']) ||
				!isset($_POST['subject']) ||
				!isset($_POST['email']) ||
				!isset($_POST['message'])) {
				$error_message = 'We are sorry, but there appears to be a problem with the form you submitted.<br />';       
			}
			else{
				// set form variables
				$name = clean_input($_POST['name']); 
				$email_subject = clean_input($_POST['subject']); 
				$email_from = clean_input($_POST['email']); 
				$message = nl2br(clean_input($_POST['message']));				
 			 
				// validate email data
				$email_exp = '/^[a-zA-Z][\w\.-]*[a-zA-Z0-9]@[a-zA-Z0-9][\w\.-]*[a-zA-Z0-9]\.[a-zA-Z][a-zA-Z\.]*[a-zA-Z]$/';
				if(!preg_match($email_exp,$email_from)) {
					$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
				}
				$string_exp = "/^[A-Za-z .'-]+$/";
				if(!preg_match($string_exp,$name)) {
					$error_message .= 'The Name you entered does not appear to be valid.<br />';
				}
				if(!preg_match($string_exp,$email_subject)) {
					$error_message .= 'The Subject you entered does not appear to be valid.<br />';
				}
				if(strlen($message) < 2) {
					$error_message .= 'The Message you entered do not appear to be valid.<br />';
				}
			}	

			if(strlen($error_message) > 0) {
				$display_message = "<p class='w3-center'>".died($error_message)."</p>";
			}
			else {	
				function clean_string($string) {
					$bad = array("content-type","bcc:","to:","cc:","href");
					return str_replace($bad,"",$string);
				}								
				
				$email_body = "Thank you ".clean_string($name)." for your email:<br><br>";
				
				$email_body .= "Subject: ".clean_string($email_subject)."<br>";
				$email_body .= "From: ".clean_string($email_from)."<br>";
				$email_body .= "Message: ".clean_string($message)."<br>";
					 
				// create email headers
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
				$headers .= 'From: '.$email_from . "\r\n";
				$headers .= 'Reply-To: '.$email_from . "\r\n";
				$headers .= 'X-Mailer: PHP/' . phpversion();

				// send email
				@mail($email_to, $email_subject, $email_body, $headers);
				
				$display_message = "<p>".$email_body."</p>";
			}								
		}
	?>

	<!-- Header large -->
	<header class="bgimg-1 w3-display-container w3-grayscale-min w3-hide-small w3-hide-medium"> 
	</header>

	<!-- Header medium  -->
	<header class="bgimg-2 w3-display-container w3-grayscale-minw w3-hide-small w3-hide-large"> 
	</header>

	<!-- Header small -->
	<header class="bgimg-3 w3-display-container w3-grayscale-minw w3-hide-medium w3-hide-large"> 
	</header>
	
	<!-- Message Section -->
	<div class="w3-container w3-padding-32 w3-text-indigo">
		<!-- sm/med subtitle -->
		<div class="w3-container w3-hide-medium w3-hide-large">
			<?php echo $display_message ?>
		</div>
		<!-- large subtitle -->
		<div class="w3-container w3-hide-small">
			<h4><?php echo $display_message ?></h4>
		</div>
	</div>

	<!-- Footer -->
	<footer class="w3-center w3-dark-grey w3-padding-64">
		<p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>	  
		<div id="gotoTop" class="w3-tooltip w3-right">
			<span class="w3-text w3-padding w3-hide-small">Go To Top</span>   
			<a class="w3-btn w3-padding w3-dark-grey w3-hover-grey" href="#home"><span class="w3-xlarge"><i class="fa fa-chevron-circle-up"></i></span></a>
		</div>
	</footer>

</body>  
</html>
