<?php
error_reporting(E_ALL);
include ('dbcon.php');

$name = $_REQUEST['head'];
$sub = $_REQUEST['sub'];
$description = $_REQUEST['description'];
$link = $_REQUEST['link'];
$page='makina';





if($conn->query("insert into downloads (named,sub,description,link,page) values('$name','$sub','$description','$link','$page')")or die(mysql_error())){
    echo 'inserted';
}else{
    echo '!!!!!!!!!!!!!!!!!';
}




