<?php
include('dbcon.php');
if (isset($_POST['updatecbo'])) {

    $cbohead = $_POST['cbohead'];
    $cbonum = $_POST['cbonum'];


    $conn->query("update ptop set lh = '$cbohead',ln='$cbonum' where page = 'makina' ") or die(mysql_error());

    header('Location: makina.php');
    exit;
}

if (isset($_POST['updatengo'])) {

    $ngohead = $_POST['ngohead'];
    $ngonum = $_POST['ngonum'];


    $conn->query("update ptop set mh = '$ngohead',mn='$ngonum' where page = 'makina' ") or die(mysql_error());

    header('Location: makina.php');
    exit;
}


if (isset($_POST['updateenv'])) {

    $envhead = $_POST['envhead'];
    $envnum = $_POST['envnum'];


    $conn->query("update ptop set rh = '$envhead',rn='$envnum' where page = 'makina' ") or die(mysql_error());

    header('Location: makina.php');
    exit;
}
