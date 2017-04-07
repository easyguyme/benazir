<?PHP
   
	
	class RegistrationValidator{
	
		private $date_today;
		private $ip;
		private $confirmation_code;
	
		//This magic method is called when the object is instantiated. 
		//It initializes couple values and also checks if there's any empty field. Shows error messsage if there is.
		function __construct($dbh){
		
			$this->dbh							= $dbh;
			$this->date_today					= date("Y-m-d");
			$this->ip							= $_SERVER["REMOTE_ADDR"];
			$this->confirmation_code			= md5(uniqid());
			
			if(isset($_POST["register_button"])){
			
				if( (!empty($_POST["username"]))		and
					(!empty($_POST["email"])) 			and
					(!empty($_POST["password_one"]))	and
					(!empty($_POST["password_two"]))	and
					(!empty($_POST["captcha"])) ) {
					
					$this->username				= trim($_POST["username"]);
					$this->email				= $_POST["email"];
					$this->password_one			= $_POST["password_one"];
					$this->password_two			= $_POST["password_two"];
					$this->encrypted_password	= md5($this->password_one);
					
					$this->check_returns();
				}else{
					echo "<i>Please fill in all the fields.</i>";
				}
			}
			
		}
		
		//This is the method where returned value from other methods is checked.
		function check_returns(){
		
			$validate_username						= $this->validate_username();
			$validate_email							= $this->validate_email();
			$validate_password						= $this->validate_password();
			$is_captcha_right						= RegistrationValidator::is_captcha_right();
			
			if($validate_username && $validate_email && $validate_password && $is_captcha_right){
				if($this->is_it_new_account()){
					$was_registration_sucessful = $this->has_registered_sucessfully();
					if($was_registration_sucessful){	
						//now send confirmation code to his email.
						$this->is_confirmation_mail_sent();
					}
				}				
			}
			
		}
		
		//This method generates captcha value and picture and stores it in a session named random_string.
		static function display_captcha(){
		
			//possible letters that can can come in captcha.
			$possible_letter = array("a", "z", "b", "t", "kpp", "sj", "mx", "l", "d", "z", "l", "bbl", "l");

			//just random number.
			$random_letter = rand(0, 12);

			//Whole random string combined with numbers and letters
			$whole_random_possibility = $possible_letter[$random_letter] . rand(100, 199) . $possible_letter[$random_letter];

			//random string stored in this session
			$_SESSION["random_string"] = $whole_random_possibility;

			//return image identifies represending black image of speficied size
			$image = imagecreatetruecolor(100, 30);

			//create text color for specified image.
			$text_color = imagecolorallocate($image, 255, 255, 255);

			//paste the string on top of the image
			imagestring($image, 5, 5, 5, $whole_random_possibility, $text_color);

			//outputs saves the image to same directory as other files.
			imagepng($image, "image.png");
			echo "<img src='image.png'> </br>";
			
		}
			
		//This method checks if the POST'd captcha value is same as the one stored in session variable random_string.
		//This reutrns true of the captcha is right, false otherwise.
		static function is_captcha_right(){
		
			//Check if captcha matches the POST'd captcha field value.
			if($_POST["captcha"] == $_SESSION["random_string"]){
				return true;
			}else{
				echo "</br><i>Wrong captcha inserted, try again</i>";
				return false;
			}
			
		}
		
		//Checks true if the email is sucessfully sent, else otherwise.
		function is_confirmation_mail_sent(){
		
			//Registerer email.
			$to 										= $this->email;
			
			//To what email registerer should replay if he decides to.
			$reply_to 									= 'sami1@live.com.pt';
			
			//Website name, for example, www.webdevtown.com. This will be our From: header. You can remove the .com.
			$from 										= 'Webdevtown.com';
			
			//Your website address. We will put our address in the subject whole subject. For example, Register your account for www.webdevtown.com
			$website_address							= 'http://www.webdevtown.com';
		
			//This is our sibject.
			$subject									= "Confirm your account for $website_address";
			
			$message = "Please click the link below to verify your account for $website_address" . "\r\n";
			$message .= "http://phpdev54321.890m.com/registration/confirmation_page.php?username=$this->username&confirmation_code=$this->confirmation_code";
			$headers = "From: $from" . "\r\n" .
				"Reply-To: $reply_to" . "\r\n" .
				'X-Mailer: PHP/' . phpversion();

			if(mail($to, $subject, $message, $headers)){
				return true;
			}else{
				echo "<i> Verification mail couldn't be sent, contact admin.</i>";
				return false;
			}
			
		}
		
		
		//Returns true if registered/inserted data, false if failed.
		function has_registered_sucessfully(){
		
			$insert_data_query = $this->dbh->prepare("INSERT INTO registration(username, email, password, registration_date, current_ip, confirmation_code) VALUES(:username, :email, :password, :registration_date, :current_ip, :confirmation_code)");
			
			$is_secussfully_inserted = $insert_data_query->execute(
			array(
				':username'=>$this->username,
				':email'=>$this->email,
				':password'=>$this->encrypted_password,
				':registration_date'=>$this->date_today,
				':current_ip'=>$this->ip,
				':confirmation_code'=>$this->confirmation_code
			));
			
			if($is_secussfully_inserted){
				echo "<i>user sucessfully registered. Go check your email and verify your account.</i>";
				return true;
			}else{
				echo "<i> Something unexpected occured. Contact site admin.</i>";
				return false;
			}
			
		}
	
		//Regular username validation. Only numbers and letters allowed. Will return true if valid.
		function validate_username(){
		
			$username_pattern					= '/^[0-9a-zA-Z]+$/';
			$is_username_valid = preg_match($username_pattern, $this->username);
			if($is_username_valid){
				return true;
			}else{
				echo "<i> Invalid username. Only letters and numbers allowed. </i> </br>";
				return false;
			}
			
		}
	
		//Email validation, returns true if valid.
		function validate_email(){
		
			$is_email_valid = filter_var($this->email, FILTER_VALIDATE_EMAIL);
			if($is_email_valid){
				return true;
			}else{
				echo "<i> Invalid email.</i> </br>";
				return false;
			}
			
		}
	
		//Checks if password meets the valid length and also checks if passwords match. True on valid passwords.
		function validate_password(){
		
			if( (strlen($this->password_one) > 5)  && (strlen($this->password_two) > 5) ){
				if($this->password_one == $this->password_two){
					return true;
				}else{
					echo "<i>Passwords do not match</i>";
					return false;
				}
			}else{
				echo "<i> Invalid password, it must be longer than 5 characters.</i>";
				return false;
			}	
			
		}
		
		//This functions checks if the username or the email user is registering with is new. Returns true if it's a new email and username.
		function is_it_new_account(){
		
			$user_email_query = $this->dbh->prepare("SELECT username, email FROM registration WHERE username = :username or email = :email");
			$user_email_query->execute(array(':username'=>$this->username, ':email'=>$this->email));
			$user_email = $user_email_query->fetch(PDO::FETCH_ASSOC);
			if( empty($user_email) ){
				return true;
			}else{
				if($user_email["username"] == $this->username ){
					echo "<i>Username {$user_email["username"]} is already registered</i>";
				}elseif( $user_email["email"] = $this->email ){
					echo "<i>Email {$user_email["email"]} is already registered</i>";
				}
				return false;
			}
			
		}
	
		//This functions is to stop banned IP form registering more accounts.
		//This function can be used to hide registration page. Or to disallow account creation when registering. 
		//If user IP is not banned, it will return false. If it is banned, it will return true.
		public function is_user_ip_banned($user_ip = ''){
		
			$select_ip_query					= $this->dbh->prepare("SELECT is_ip_banned FROM registration WHERE current_ip = :current_ip");
			$select_ip_query->execute(array(':current_ip'=>$this->ip));
			$ip_ban_return_data					= $select_ip_query->fetch(PDO::FETCH_ASSOC);
			
			if($ip_ban_return_data["is_ip_banned"] == 0){
				return false;
			}else{
				return true;
			}
			
		}
		
		//This function is used to GET confirmation code and account name from GET variable. 
		//It checks if confirmation code in GET variable is valid and so is account, it will remove the confirmation code from confirmation_code field in the table. Which means account has been confirmed.
		function confirm_account($dbh){
		
			if( isset($_GET["confirmation_code"])	&&
			isset($_GET["username"])				&&
			!empty($_GET["confirmation_code"])		&& 
			!empty($_GET["username"]) ){
			
				$select_confirmation_code_query = $dbh->prepare("SELECT username, confirmation_code FROM registration WHERE username = :username AND confirmation_code = :confirmation_code");
				$select_confirmation_code_query->execute(array(':username'=>$_GET["username"], 
				':confirmation_code'=>$_GET["confirmation_code"]));

				$confirmation_code = $select_confirmation_code_query->fetch(PDO::FETCH_ASSOC);
				
				if(count($confirmation_code) == 2){
					
					$remove_confirmation_query = $dbh->prepare("UPDATE registration SET confirmation_code = '' WHERE confirmation_code = :confirmation_code");
					if($remove_confirmation_query->execute(array(':confirmation_code'=>$_GET["confirmation_code"]))){
						echo $_GET["username"] . ' <i>has been confirmed</i>';
					}else{
						echo "<i>Your account couldn't be confirmed. Sontact admin.</i>";
					}
					
				}else{
					echo "<i>This page doesn't exist. couldn't find valid info in db</i>";
				}
			}else{
				echo "<i>This page doesn't exist. parameters not valid</i>";
			}
			
		}
		
	}

?>