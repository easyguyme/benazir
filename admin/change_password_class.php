<?PHP

//Credits must stay intact
//Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
//For more scripts or tutorials visit http://www.webdevtown.com
//If this script is uploaded on any website without credits, it will be taken down.

class changePassword{
    function __construct($conn){
        $this->conn = $conn;
        if(isset($_POST["change_password_button"])){
            $this->old_password                     =$_POST["old_password"];
            $this->new_password						= $_POST["new_password"];
            $this->new_password_two 				= $_POST["new_password_two"];
            $this->username							= $_SESSION["logged_in"];

            $this->process();
        }
    }

    private function process(){
        if($this->are_fields_filled() && $this->check_old_pass()){
           if ($this->validate_password()){
               if($this->change_password()){
                   echo "Password has been changed.";
               }
           }
        }
    }

    private function change_password(){
        $select_current_pass_and_username = $this->conn->prepare("UPDATE registration SET password = :password where email=:username");
        if($select_current_pass_and_username->execute(array(':password'=>md5($this->new_password),':username'=>$this->username))){
            return true;
        }else{
            echo "<i style='color: red;font-size: x-large'>Sorry but your current password is not correct.</i>";
            return false;
        }
    }

    private function are_fields_filled(){
        //var_dump($_POST);
        if((strlen($this->new_password) > 5) and (strlen($this->new_password_two) > 5) and (strlen($this->old_password) > 5) ){
return true;
        }else{
            echo "<i style='color: red;font-size: x-large'>Fill all the fields. Make sure passwords are atleast 5 characters long.</i>";
            return false;
        }
    }





    private function check_old_pass(){

    $old_pass_check = $this->conn->prepare("SELECT password from registration where email=:username");
$old_pass_check->bindParam(":username",$this->username,PDO::PARAM_STR, 15);
        $old_pass_check->execute();
        $query = $old_pass_check->fetch(PDO::FETCH_OBJ);

        if ($query->password<>md5($this->old_password)){

            echo "<i style='color: red;font-size: x-large'>Your old password  is not matching as per our record.</i>";
            return false;
        }else{
            return true;
        }

    }



    private function validate_password(){


            if($this->new_password	 == $this->new_password_two ){
                return true;
            }else{
                echo "<i style='color: red;font-size: x-large'>Passwords do not match</i>";
                return false;
            }


    }
}





?>