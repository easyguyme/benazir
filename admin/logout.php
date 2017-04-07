<?php
include('dbcon.php');
session_start();
session_destroy();
$conn->query("update user_log set logout_Date = NOW() where user_id = '$session_id' ")or die(mysql_error());

header('location:index.php');
?>