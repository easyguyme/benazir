<?php
include('dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
/* student */
$resultFilms = $conn->prepare("select * from users where username = '$username' and password = '$password'")or die(mysql_error());
$resultFilms->execute();
$num_row = $resultFilms->rowcount();
$row = $resultFilms->fetch();


if( $num_row > 0 ) {
	$_SESSION['id']=$row['user_id'];
	echo 'true';
	$conn->query("insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysql_error());
} else{
	echo 'false';
}
?>