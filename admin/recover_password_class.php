<?PHP

require ('../PHPMailer/PHPMailerAutoload.php');
class RecoverPassword{
    //Check if email exists in database.
    //If exists, store that email in recover_password table. And generate random string.
    //Send that random string to that email.

    //If you're trying to change your password, please click the link below, or else just leave it if not.
    //www.example.com/recover_password/recover_password.php?recoveryy_code=543kl5jkl43j5k;

    //On recover_password.php file get the recover_code and check if it matches with recover_code in recover_password table, if it matches, load registration table and change the password to recovery_code. 

    //Lastly tell user that his recovery code has been sent to his email.

    function __construct($conn){

        $this->conn								= $conn;

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
                        echo "<i style='color: red;font-size: x-large'> Reset code sent. Please check your email and click the link and you will receive another email with a new password. </i>";
                    }
                }
            }
        }
    }

    private function store_new_password_temp(){
        $insert_mail_pass_query = $this->conn->prepare("INSERT INTO recover_password(email, recovery_code) VALUES(:email, :recovery_code)");

        $data_insertion = $insert_mail_pass_query->execute(array(':email'=>$this->email, ':recovery_code'=>$this->recovery_code));

        if($data_insertion){
            return true;

        }else{
            return false;
        }
    }

    function send_recovery_email(){
        $message = "http://localhost/umande/admin/recovery_page.php?email=$this->email&recovery_code=$this->recovery_code";
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

        $mail->setFrom('donotreply@womenvoicesictchoices.org', 'WOMEN VOICES DASHBOARD PASS RECOVERY');
       

        $mail->addAddress($this->email, 'YOU');

        //Registerer email.
        $website_address							= 'www.womenvoicesictchoices.org';

        //This is our sibject.
        $mail->Subject= "Recovery account for $website_address";


       

        $mail->Body="Please click the link below if you're trying to reset your password for $website_address" .  "\r\n" . $message;


        if ($mail->send()) {
            return true;
        }else{
            echo "Mailer Error: " . $mail->ErrorInfo;
            echo "<i style='color: red;font-size: x-large'> Account couldn't be recovered. Contact admin.</i>";

        }

    }


    private function does_email_exist(){
        $get_email_query = $this->conn->prepare("SELECT email FROM registration WHERE email = :email");
        $get_email_query->execute(array(':email'=>$this->email));
        $email_from_db = $get_email_query->fetch(PDO::FETCH_ASSOC);
        if(!empty($email_from_db)){
            return true;
        }else{
            echo "<i style='color: red;font-size: x-large'> That's not a registered email.</i>";
            return false;
        }
    }

    private function is_email_valid(){

        $is_email_valid							= filter_var($this->email, FILTER_VALIDATE_EMAIL);

        if($is_email_valid){
            return true;
        }else{
            echo "<i style='color: red;font-size: x-large'> Invalid email.</i> </br>";
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
        $select_mail_pass_query = $this->conn->prepare("SELECT email, recovery_code FROM recover_password WHERE email = :email and recovery_code = :recovery_code");
        $select_mail_pass_query->execute(array(':email'=>$this->email, ':recovery_code'=>$this->recovery_code));
        $mail_and_pass = $select_mail_pass_query->fetch(PDO::FETCH_ASSOC);
        if(!empty($mail_and_pass)){
            return true;
        }else{
            echo "<i style='color: blue;font-size: x-large'>Page doesn't exist (NO valid match)</i>";
            return false;
        }
    }

    private function insert_new_password_in_registration(){
        $this->new_password = md5($this->recovery_code);
        $set_new_pass_query = $this->conn->prepare("UPDATE registration SET password = :password WHERE email = :email");
        if($set_new_pass_query->execute(array(':password'=>md5($this->new_password), ':email'=>$this->email))){
            return true;
        }else{
            echo "<i style='color: red;font-size: x-large'> Inserting new password in registration failed.</i>";
            return false;
        }
    }

    private function send_new_password(){
        $message = "Your new password is $this->new_password";
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

        $mail->setFrom('donotreply@womenvoicesictchoices.org', 'WOMEN VOICES DASHBOARD PASS RECOVERY');


        $mail->addAddress($this->email, 'YOU');

        //Registerer email.
        $website_address							= 'www.womenvoicesictchoices.org';

        //This is our sibject.

        $mail->Subject= "New password for $website_address";


        $mail->Body="Hi Admin" .  "\r\n" . $message;

        if ($mail->send()) {
            return true;
        }else{
            echo "Mailer Error: " . $mail->ErrorInfo;
            echo "<i style='color: red;font-size: x-large'> Account couldn't be recovered. Contact admin.</i>";

        }
    }


    //Delete all the dubpicates entries of recovery code and email made in case used continueslty refreshed the page for new recovery_code.
    private function remove_all_duplications(){
        $remove_dublications_query = $this->conn->prepare("DELETE FROM recover_password WHERE email = :email");
        if($remove_dublications_query->execute(array(':email'=>$this->email))){
            echo "<i style='color: blue;font-size: x-large'> Email with new password sent</i>";
        }else{
            echo "<i style='color: red;font-size: x-large'> Failed to remove duplicate entries from database </i>";
            return false;
        }
    }

}

?>