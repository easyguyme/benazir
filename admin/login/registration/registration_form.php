<html>
	<head> 
		<link rel = "stylesheet" type = "text/css" href = "../style.css"/>
		<title> Register </title>
	</head>
	
	<body>
		<noscript> Please enable Javascript.</noscript>
		<?PHP
		    //Credits must stay intact
			//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
			//For more scripts or tutorials visit http://www.webdevtown.com
			//If this script is uploaded on any website without credits, it will be taken down.
	
			session_start();
			include("../connection.php");
			include("php_functions.php");
			include("php_form_validator.php");
			
			$RegistrationValidator				= new RegistrationValidator($dbh);
			$is_user_ip_banned					= $RegistrationValidator->is_user_ip_banned();	
		?>
		
		<?PHP if(!$is_user_ip_banned): ?>
		
		<?PHP
			if(!isset($_SESSION["logged_in"])):
		?>
	
			<!-- Registration form -->
			<form name = "register" method = "POST" id = "reg_form" action="registration_form.php">
				<fieldset>
					<legend> Register </legend>
					
					<div> <label for = "username"> Username: </label> </div>
					<input id = "username" name = "username" type = "text" value = "<?PHP echo is_value_set("username");?>"/>
					<div id="error_username"></div>
					
					<div> <label for = "email"> Email: </label> </div>
					<input id = "email" name = "email" value = "<?PHP echo is_value_set("email"); ?>" />
					<div id="error_email"></div>
					
					<div> <label for = "password_one"> Password: </label> </div>
					<input id = "password_one" name = "password_one" type = "password"/>
					
					<div> <label for = "password_two"> Repeat Password: </label> </div>
					<input id = "password_two" name = "password_two" type = "password"/> 
					<div id="error_password"></div>
					
					<div> <label for = "captcha"> Enter captcha: </label> </div>
					<input id = "captcha" name = "captcha" type = "text"> </br>
					<div id="error_captcha"></div>
					<?PHP RegistrationValidator::display_captcha(); ?> </br>
					
					<input name="register_button" value="Register me!" type="submit"/>	
				</fieldset>
			</form>
		<?PHP else: ?>
			You're already logged in. Do not register another account. It's against out TOS.
		<?PHP endif; ?>
		
		<?PHP else: ?>
			Sorry but I'm no longer accepting any new accounts from this IP address.
		<?PHP endif; ?>
		<script src="js_form_validator.js"></script>
	</body>
	
</html>


