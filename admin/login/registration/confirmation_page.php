<?PHP
    //Credits must stay intact
    //Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
    //For more scripts or tutorials visit http://www.webdevtown.com
    //If this script is uploaded on any website without credits, it will be taken down.
	
	include("../connection.php");
	include("php_form_validator.php");
	
	$RegistrationValidator				= new RegistrationValidator($dbh);
	$is_user_ip_banned					= $RegistrationValidator->is_user_ip_banned();	
	
	if(!$is_user_ip_banned){
		$RegistrationValidator->confirm_account($conn);
	}
	

?>
