<?PHP
require ('../PHPMailer/PHPMailerAutoload.php');
	
	class RegistrationValidator{
	
		private $date_today;
		private $ip;
		private $confirmation_code;
	
		//This magic method is called when the object is instantiated. 
		//It initializes couple values and also checks if there's any empty field. Shows error messsage if there is.
		function __construct($conn){
		
			$this->conn							= $conn;
			$this->date_today					= date("Y-m-d");
			$this->ip							= $_SERVER["REMOTE_ADDR"];
			$this->confirmation_code			= md5(uniqid());
			
			if(isset($_POST["register_button"])){
			
				if( (!empty($_POST["fname"]))		and
					(!empty($_POST["sname"]))		and
					(!empty($_POST["email"])) 			and
					(!empty($_POST["password_one"]))	and
					(!empty($_POST["password_two"]))	and
					(!empty($_POST["captcha"])) ) {
					
					$this->fname				= trim($_POST["fname"]);
					$this->sname				= trim($_POST["sname"]);
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





		function logprocess(){




        }
		//This is the method where returned value from other methods is checked.
		function check_returns(){
		
			$validate_fname						= $this->validate_fname();
			$validate_sname						= $this->validate_sname();
			$validate_email							= $this->validate_email();
			$validate_password						= $this->validate_password();
			$is_captcha_right						= RegistrationValidator::is_captcha_right();
			
			if($validate_fname && $validate_sname && $validate_email && $validate_password && $is_captcha_right){
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
			$possible_letter = array("P", "m", "r", "a", "wan", "ga", "ra", "k", "h", "z", "G", "bbQ", "H");

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
            $message ="http://localhost/umande/admin/confirmation_page.php?fname=$this->fname&confirmation_code=$this->confirmation_code";
			//Create a new PHPMailer instance
			$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
            $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
			$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
//Set the hostname of the mail server
			$mail->Host = 'mail.womenvoicesictchoices.org';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
			$mail->Port = 2525;
//Set the encryption system to use - ssl (deprecated) or tls
			$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
			$mail->Username = "donotreply@womenvoicesictchoices.org";
//Password to use for SMTP authentication
			$mail->Password = "donotreply@umande2017";

			$mail->setFrom('donotreply@womenvoicesictchoices.org', 'WOMEN VOICES DASHBOARD');
			//$mail->addReplyTo($this->email, $this->fname);
			//Registerer email.
			
			$mail->addAddress($this->email, $this->fname);




			
			//Your website address. We will put our address in the subject whole subject. For example, Register your account for www.webdevtown.com
			$website_address							= 'www.womenvoicesictchoices.org';
		
			//This is our sibject.
			$mail->Subject= "Confirm your account for $website_address";
			$mail->Body="Please click the link below to verify your admin account for $website_address" . "\r\n" . $message;


            if ($mail->send()) {
                return true;
            }else{
                echo "Mailer Error: " . $mail->ErrorInfo;
				echo "<i> Verification mail couldn't be sent, contact admin on +254729790289.</i>";

			}
			
		}
		
		
		//Returns true if registered/inserted data, false if failed.
		function has_registered_sucessfully(){
		
			$insert_data_query = $this->conn->prepare("INSERT INTO registration(fname,sname,email, password, registration_date, current_ip, confirmation_code) VALUES(:fname,:sname, :email, :password, :registration_date, :current_ip, :confirmation_code)");
			
			$is_secussfully_inserted = $insert_data_query->execute(
			array(
				':fname'=>$this->fname,
				':sname'=>$this->sname,
				':email'=>$this->email,
				':password'=>$this->encrypted_password,
				':registration_date'=>$this->date_today,
				':current_ip'=>$this->ip,
				':confirmation_code'=>$this->confirmation_code
			));
			
			if($is_secussfully_inserted){
				echo "<i>user sucessfully registered. Tell them to check their email and verify the account.</i>";
				return true;
			}else{
				echo "<i> Something unexpected occured. Contact site admin.</i>";
				return false;
			}
			
		}
	
		//Regular username validation. Only numbers and letters allowed. Will return true if valid.
		function validate_fname(){
		
			$fname_pattern					= '/^[0-9a-zA-Z]+$/';
			$is_fname_valid = preg_match($fname_pattern, $this->fname);
			if($is_fname_valid){
				return true;
			}else{
				echo "<i> Invalid First name. Only letters and numbers allowed. </i> </br>";
				return false;
			}
			
		}

		function validate_sname(){

			$sname_pattern					= '/^[0-9a-zA-Z]+$/';
			$is_sname_valid = preg_match($sname_pattern, $this->sname);
			if($is_sname_valid){
				return true;
			}else{
				echo "<i> Invalid Second name. Only letters and numbers allowed. </i> </br>";
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
		
			$user_email_query = $this->conn->prepare("SELECT fname, email FROM registration WHERE fname = :fname or email = :email");
			$user_email_query->execute(array(':fname'=>$this->fname, ':email'=>$this->email));
			$user_email = $user_email_query->fetch(PDO::FETCH_ASSOC);
			if( empty($user_email) ){
				return true;
			}else{
				if($user_email["fname"] == $this->fname ){
					echo "<i>Sorry {$user_email["fname"]} is already registered</i>";
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
		
			$select_ip_query					= $this->conn->prepare("SELECT is_ip_banned FROM registration WHERE current_ip = :current_ip");
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
		function confirm_account($conn){

			if( isset($_GET["confirmation_code"])	&&
				isset($_GET["fname"])				&&
				!empty($_GET["confirmation_code"])		&&
				!empty($_GET["fname"]) ){

				$select_confirmation_code_query = $conn->prepare("SELECT fname, confirmation_code FROM registration WHERE fname = :fname AND confirmation_code = :confirmation_code");
				$select_confirmation_code_query->execute(array(':fname'=>$_GET["fname"],
					':confirmation_code'=>$_GET["confirmation_code"]));

				$confirmation_code = $select_confirmation_code_query->fetch(PDO::FETCH_ASSOC);

				if(count($confirmation_code) == 2){

					$remove_confirmation_query = $conn->prepare("UPDATE registration SET confirmation_code = '' WHERE confirmation_code = :confirmation_code");
					if($remove_confirmation_query->execute(array(':confirmation_code'=>$_GET["confirmation_code"]))){
						echo $_GET["fname"] . ' <i >Your Acount has been confirmed </br> Please go to http://www.womenvoicesictchoices.org if you are not redirected</i>'.
                        header("Location: http://www.womenvoicesictchoices.org/umande/admin"); /* Redirect browser */
exit();
					}else{
						echo "<i >Your account couldn't be confirmed. Contact admin.</i>";
					}

				}else{
					echo "<i >This token doesn't exist. Maybe you already used it. Contact System Admin</i>";
				}
			}else{
				echo "<i >This page doesn't exist. parameters not valid</i>";
			}

		}
		
	}

?>