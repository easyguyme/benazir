<!DOCTYPE HTML/>
<html>
	<head> <title> Recover password </title>
		<link rel="stylesheet" href="../style.css" type="text/css" >
	</head>
	
	<body>
		
		<?PHP
			//Credits must stay intact
			//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
			//For more scripts or tutorials visit http://www.webdevtown.com
			//If this script is uploaded on any website without credits, it will be taken down.
	
			include("../connection.php");
			include("recover_password_class.php");
			$RecoverPassword = new RecoverPassword($dbh);
		?>
		
		<form name = "recover_password" method = "POST" id = "recover_password_form" action="recover_password_form.php">
			<fieldset>
				<legend> Recover </legend>
				
				<div> <label for = "email"> Email: </label> </div>
				<input id = "email" name = "email" type = "text" />
				<div id="error_email"></div>
				
				<input name="recover_button" value="Recover" type="submit" />	
			</fieldset>
		</form>
		
	
		
	</body>
</html>