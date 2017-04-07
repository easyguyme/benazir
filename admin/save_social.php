<?php
include('dbcon.php');
if (isset($_POST['facebook'])) {

    $link = $_POST['facebooks'];


    $conn->query("update social set link = '$link' where account = 'facebook' ") or die(mysql_error());

    header('Location: home.php');
    exit;
}


if (isset($_POST['instagram'])){
    $linka = $_POST['instagrams'];



    $conn->query("update social set link = '$linka' where account = 'instagram' ")or die(mysql_error());
    header('Location: home.php');
    exit;
}

if (isset($_POST['twitter'])){
    $linkb = $_POST['twitters'];



    $conn->query("update social set link = '$linkb' where account = 'twitter' ")or die(mysql_error());
    header('Location: home.php');
    exit;

}

if (isset($_POST['youtube'])) {
    $linkc = $_POST['youtubes'];



    $conn->query("update social set link = '$linkc' where account = 'youtube' ")or die(mysql_error());
    header('Location: home.php');
    exit;
}