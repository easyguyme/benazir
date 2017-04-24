<?php
if(!isset($_SESSION)){
    session_start();
}
$conn = new PDO('mysql:host=localhost;dbname=umande', 'root', '');
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['logged_in']) || (trim($_SESSION['logged_in']) == '')) { ?>
    <script>
        window.location = "index.php";
    </script>
    <?php
}
$session_id=$_SESSION['logged_in'];

$user_query = $conn->query("select * from registration where user_id = '$session_id'")or die(mysql_error());
$user_row = $user_query->fetch();
$user_username = $user_row['email'];
?>