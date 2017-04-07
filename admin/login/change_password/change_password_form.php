<!DOCTYPE HTML/>
<html>
	<head> <title> Change password </title>
		<link rel="stylesheet" href="../style.css" type="text/css" >
	</head>
	
	<body>
		
		<?PHP
		
		    //Credits must stay intact
			//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
			//For more scripts or tutorials visit http://www.webdevtown.com
			//If this script is uploaded on any website without credits, it will be taken down.
			session_start();
			include("../connection.php");
			include("change_password_class.php");
			$changePassword = new changePassword($dbh);
			
		?>
		<?PHP if(isset($_SESSION["logged_in"])): ?>
		<form name = "change_password" method = "POST" id = "change_password_form" action="change_password_form.php">
			<fieldset>
				<legend> Change password </legend>
				
				<div> <label for = "new_password"> New password: </label> </div>
				<input id = "new_password" name = "new_password" type = "text" />
				<div id = "error_new_password"></div>
				
				<div> <label for = "new_password_two"> New password(repeat): </label> </div>
				<input id = "new_password_two" name = "new_password_two" type = "text" />
				<div id = "error_new_password_two"></div>
				
				<div id = "error"></div>
				
				<input name = "change_password_button" value = "Change Password" type = "submit" />	
			</fieldset>
		</form>
		<?PHP else: ?>
			Login to change your password
		<?PHP endif; ?>
		<!--<script type="text/javascript" src="change_password_validation_js.js"></script>-->
		
	</body>
</html>