<?PHP

    //Credits must stay intact
    //Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
    //For more scripts or tutorials visit http://www.webdevtown.com
    //If this script is uploaded on any website without credits, it will be taken down.

	class Login{
		private $conn;
		private $ip;
		function __construct($conn){
			$this->dbh							= $conn;
			$this->ip 							= $_SERVER["REMOTE_ADDR"];
		
			if( isset($_POST["login_button"]) ){
				$this->username					= $_POST["username"];
				$this->password					= md5($_POST["password"]);
				$this->processor();
			}			
		}
		
		//*check if user password are correct. then check if user is banned. if user is not banned check if account is confirmed. if account is confirmed, then login and create session.

		private function processor(){
			if( $this->are_fields_filled() ){
				if($this->are_credentials_right()){
					if($this->is_user_allowed_access()){
						if($this->is_account_confirmed()){
							$this->create_session();
						}
					}
				}
			}
		}
		
		private function create_session(){
			if(!isset($_SESSION)){
				session_start();
			}
			$_SESSION["logged_in"] = $this->username;
			echo "<i> You're now logged in.</i>";
		}
		
		private function is_account_confirmed(){
			$select_confirmation_query = $this->dbh->prepare("SELECT confirmation_code FROM registration WHERE username = :username");
			$select_confirmation_query->execute(array(':username'=>$this->username));
			$confirmation_code = $select_confirmation_query->fetch(PDO::FETCH_ASSOC);
			if($confirmation_code["confirmation_code"] == 0){
				return true;
			}else{
				echo "<i> Confirm your account first </i>";
			}
		}
		
		private function are_fields_filled(){
			if( ((strlen($this->password) > 5)) and ((strlen($this->username) >= 1)) ){
				return true;
			}else{
				echo "<i> Enter correct password and username. Password cannot be smaller than 5 characters</i>";
				return false;
			}
		}
		
		private function are_credentials_right(){
			$select_user_and_pass_query = $this->dbh->prepare("SELECT username, password FROM registration WHERE username = :username AND password = :password");
			
			$select_user_and_pass_query->execute(array(':username'=>$this->username, ':password'=>$this->password));
			$returned_user_and_pass = $select_user_and_pass_query->fetch(PDO::FETCH_ASSOC);
			
			if(count($returned_user_and_pass) == 2){
				return true;
			}else{
				echo "<i>Wrong username or password</i>";
				return false;
			}
			
		}
		
		private function is_user_allowed_access(){
			$is_user_banned_query = $this->dbh->prepare("SELECT is_account_banned, account_unban_date FROM registration WHERE username = :username");
			$is_user_banned_query->execute(array(':username'=>$this->username));
			$returned_ban_info = $is_user_banned_query->fetch(PDO::FETCH_ASSOC);
			if($returned_ban_info["is_account_banned"] == 1){
				$account_unban_date = $returned_ban_info["account_unban_date"];
				echo "<i>Your account is banned till $account_unban_date</i>";
				return false;
			}else{
				return true;
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
		
	}



?>