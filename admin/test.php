<?php
error_reporting(E_ALL);
include ('dbcon.php');

$type = $_REQUEST['type'];
$period = $_REQUEST['period'];
$location = $_REQUEST['location'];
$budget = $_REQUEST['budget'];
$page='makina';

if($conn->query("insert into plans_county (types,period,location,budget,page) values('$type','$period','$location','$budget','$page')")or die(mysql_error())){
    echo 'inserted';
}else{
    echo '!!!!!!!!!!!!!!!!!';
}




