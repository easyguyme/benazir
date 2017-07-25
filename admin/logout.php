<?php
include('dbcon.php');
include ('session.php');
//session_start();
$conn->query("update user_log set logout_date = NOW() where username = '$session_id' ")or die(mysql_error());
session_destroy();


header('location:index.php');
?>