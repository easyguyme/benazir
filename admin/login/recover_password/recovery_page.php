<?PHP

	
	include("../connection.php");
	include("recover_password_class.php");
	$RecoverPassword = new RecoverPassword($dbh);
	$RecoverPassword->generate_new_password();

?>