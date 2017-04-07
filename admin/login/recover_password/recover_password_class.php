<?PHP
    //Credits must stay intact
    //Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
    //For more scripts or tutorials visit http://www.webdevtown.com
    //If this script is uploaded on any website without credits, it will be taken down.
		
	class RecoverPassword{
		//Check if email exists in database.
		//If exists, store that email in recover_password table. And generate random string.
		//Send that random string to that email.
		
		//If you're trying to change your password, please click the link below, or else just leave it if not.
		//www.example.com/recover_password/recover_password.php?recoveryy_code=543kl5jkl43j5k;
		
		//On recover_password.php file get the recover_code and check if it matches with recover_code in recover_password table, if it matches, load registration table and change the password to recovery_code. 
		
		//Lastly tell user that his recovery code has been sent to his email.
		
		function __construct($dbh){
		
			$this->dbh								= $dbh;
			
			if(isset($_POST["recover_button"])){
				$this->email						= $_POST["email"];
				$this->recovery_code				= md5(uniqid());
				$this->recovery_processor();
			}
			
		}		
		
		private function recovery_processor(){
			if($this->is_email_valid()){
				if($this->does_email_exist()){
					if($this->store_new_password_temp()){
						if($this->send_recovery_email()){
							echo "<i> Email sent. Please click the link and you will receive another email with new password. </i>";
						}
					}
				}
			}
		}
		
		private function store_new_password_temp(){
			$insert_mail_pass_query = $this->dbh->prepare("INSERT INTO recover_password(email, recovery_code) VALUES(:email, :recovery_code)");
			
			$data_insertion = $insert_mail_pass_query->execute(array(':email'=>$this->email, ':recovery_code'=>$this->recovery_code));
			
			if($data_insertion){
				return true;
				
			}else{
				return false;
			}
		}
		
		function send_recovery_email(){
		
			//Registerer email.
			$to 										= $this->email;
			
			//To what email registerer should replay if he decides to.
			$reply_to 									= 'sami1@live.com.pt';
			
			//Website name, for example, www.webdevtown.com. This will be our From: header. You can remove the .com.
			$from 										= 'Webdevtown.com';
			
			//Your website address. We will put our address in the subject whole subject. For example, Register your account for www.webdevtown.com
			$website_address							= 'http://www.webdevtown.com';
		
			//This is our sibject.
			$subject									= "Recovery account for $website_address";
			
			$message = "Please click the link below if you're trying to recovery your password for $website_address" . "\r\n";
			$message .= "http://phpdev54321.890m.com/recover_password/recovery_page.php?email=$this->email&recovery_code=$this->recovery_code";
			$headers = "From: $from" . "\r\n" .
				"Reply-To: $reply_to" . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			if(mail($to, $subject, $message, $headers)){
				return true;
			}else{
				echo "<i> Account couldn't be recovered. Contact admin.</i>";
				return false;
			}
			
		}
		
		
		private function does_email_exist(){
			$get_email_query = $this->dbh->prepare("SELECT email FROM registration WHERE email = :email");
			$get_email_query->execute(array(':email'=>$this->email));
			$email_from_db = $get_email_query->fetch(PDO::FETCH_ASSOC);
			if(!empty($email_from_db)){
				return true;
			}else{
				echo "<i> That's not a registered email.</i>";
				return false;
			}
		}
		
		private function is_email_valid(){
		
			$is_email_valid							= filter_var($this->email, FILTER_VALIDATE_EMAIL);
			
			if($is_email_valid){
				return true;
			}else{
				echo "<i> Invalid email.</i> </br>";
				return false;
			}
			
		}
		
		
		
		//******************************************//
		//WHEN USER IS LANDED ON 'RECOVERY_PAGE.PHP'//
		//******************************************//
		public function generate_new_password(){
		
			if( isset($_GET["email"])			and
			isset($_GET["recovery_code"])		and
			!empty($_GET["email"])				and
			!empty($_GET["recovery_code"]) ){
				$this->email					= $_GET["email"];
				$this->recovery_code			= $_GET["recovery_code"];
				
				if($this->does_temp_data_match()){
					if($this->insert_new_password_in_registration()){
						if($this->send_new_password()){
							$this->remove_all_duplications();
						}
					}
				}
				
			}else{
				echo "Page doesn't exist (INV PAR)";
			}
		}
		
		private function does_temp_data_match(){
			$select_mail_pass_query = $this->dbh->prepare("SELECT email, recovery_code FROM recover_password WHERE email = :email and recovery_code = :recovery_code");
			$select_mail_pass_query->execute(array(':email'=>$this->email, ':recovery_code'=>$this->recovery_code));
			$mail_and_pass = $select_mail_pass_query->fetch(PDO::FETCH_ASSOC);
			if(!empty($mail_and_pass)){
				return true;
			}else{
				echo "<i>Page doesn't exist (NO valid match)</i>";
				return false;
			}
		}
		
		private function insert_new_password_in_registration(){
			$this->new_password = md5($this->recovery_code);
			$set_new_pass_query = $this->dbh->prepare("UPDATE registration SET password = :password WHERE email = :email");
			if($set_new_pass_query->execute(array(':password'=>md5($this->new_password), ':email'=>$this->email))){
				return true;
			}else{
				echo "<i> Inserting new password in registration failed.</i>";
				return false;
			}
		}
		
		private function send_new_password(){			
			//Registerer email.
			$to 										= $this->email;
			
			//To what email registerer should replay if he decides to.
			$reply_to 									= 'sami1@live.com.pt';
			
			//Website name, for example, www.webdevtown.com. This will be our From: header. You can remove the .com.
			$from 										= 'Webdevtown.com';
			
			//Your website address. We will put our address in the subject whole subject. For example, Register your account for www.webdevtown.com
			$website_address							= 'http://www.webdevtown.com';
		
			//This is our sibject.
			$subject									= "New password for $website_address";
			
			$message = "Your new password is $this->new_password";

			$headers = "From: $from" . "\r\n" .
				"Reply-To: $reply_to" . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			if(mail($to, $subject, $message, $headers)){
				return true;
			}else{
				echo "<i> Account couldn't be recovered. Contact admin.</i>";
				return false;
			}
		}
		
		
		//Delete all the dubpicates entries of recovery code and email made in case used continueslty refreshed the page for new recovery_code.
		private function remove_all_duplications(){
			$remove_dublications_query = $this->dbh->prepare("DELETE FROM recover_password WHERE email = :email");
			if($remove_dublications_query->execute(array(':email'=>$this->email))){
				echo "<i> Email with new password sent</i>";
			}else{
				echo "<i> Failed to remove duplicate entries from database </i>";
				return false;
			}
		}
		
	}

?>