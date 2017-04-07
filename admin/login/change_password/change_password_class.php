<?PHP

    //Credits must stay intact
    //Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
    //For more scripts or tutorials visit http://www.webdevtown.com
    //If this script is uploaded on any website without credits, it will be taken down.
	
	class changePassword{
		function __construct($dbh){
			$this->dbh = $dbh;
			if(isset($_POST["change_password_button"])){
				$this->new_password						= $_POST["new_password"];
				$this->new_password_two 				= $_POST["new_password_two"];
				$this->username							= $_SESSION["logged_in"];
				
				$this->process();
			}
		}
		
		private function process(){
			if($this->are_fields_filled()){
				if($this->change_password()){
					echo "Password has been changed.";
				}
			}
		}
		
		private function change_password(){
			$select_current_pass_and_username = $this->dbh->prepare("UPDATE registration SET password = :password");
			if($select_current_pass_and_username->execute(array(':password'=>md5($this->new_password)))){
				return true;
			}else{
				echo "<i>Sorry but your current password is not correct.</i>";
				return false;
			}
		}
		
		private function are_fields_filled(){
			var_dump($_POST);
			if((strlen($this->new_password) > 5)		and
			(strlen($this->new_password_two) > 5) ){
				return true;
			}else{
				echo "<i>Fill all the fields. Make sure passwords are atleast 5 characters long.</i>";
				return false;
			}
		}
		
		
	}





?>