<!DOCTYPE HTML/>
<html>
	<head> <title> Login </title>
		<link rel="stylesheet" href="../style.css" type="text/css" >
	</head>
	
	<body>
		
		<?PHP
		    //Credits must stay intact
			//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
			//For more scripts or tutorials visit http://www.webdevtown.com
			//If this script is uploaded on any website without credits, it will be taken down.
	
			include("php_functions.php");
			include("../connection.php");
			include("login_class.php");	
			$Login = new login($dbh);
				if( !isset($_SESSION) ){
					session_start();
				}
		?>
		
		<?PHP if(!$Login->is_user_ip_banned()): ?>
		
			<?PHP if(!isset($_SESSION["logged_in"])): ?>
				<form name = "login" method = "POST" id = "login_form" action="login_form.php">
					<fieldset>
						<legend> Login </legend>
						
						<div> <label for = "username"> Username: </label> </div>
						<input id = "username" name = "username" type = "text" />
						<div id="error_username"></div>
						
						<div> <label for = "password"> Password: </label> </div>
						<input id = "password" name = "password" />
						<div id="error_password"></div>
						
						<input name="login_button" value="Login" type="submit" />	
					</fieldset>
				</form>
			<?PHP else: ?>
				You're already logged in.
				<a href="logout.php"> Logout </a>
			<?PHP endif ?>
			
		<?PHP else: ?>
			Your IP address has been blocked.
		<?PHP endif; ?>
		
		<!--<script type="text/javascript" src="js_login_form_validator.js"></script>-->
		
	</body
</html>