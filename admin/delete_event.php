<?php
include('dbcon.php');
include ('session.php');
if (isset($_POST['delete_event'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM hevents where id='$id[$i]'");
        $conn->query("insert into activity_log (username,date,action) values('$session_id',NOW(),'Deleted an event')")or die (mysql_error());
    }
    header("location: addevent.php");
}
?>