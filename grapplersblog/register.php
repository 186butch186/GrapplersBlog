<!DOCTYPE HTML>

<?php
//@author Michael Butchko / PHP with Form Validation
include('register_handle.php'); // Includes register Script

//display errors
ini_set('display_errors', True); 
error_reporting(E_ALL | E_STRICT); 
?>
<html>
	<head>
		<title>Grapplers Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main2.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Register your account </h1>
			</header>
			
			<?php echo "<p>$name_Err </p>"?>
			<?php echo "$pass_Err"?>
			<?php echo "$pass_match_Err"?>
		
			<!-- Signup Form -->
			<form id="signup-form" method="post" action="#">
				<input type="text" name="username" id="username" placeholder="Username" /> 
				<input type="password" name="pass1" id="pass1" placeholder="Password" />
				<input type="password" name="pass2" id="pass2" placeholder="Retype Password" />
				 <br /> 
				 
				<input type="submit" value="Register" />
			</form>
			
			<h2><a href="grapplersblog.php">Back to login</a></h2>
			

			<script src="assets/js/main2.js"></script>
			

	</body>
</html>