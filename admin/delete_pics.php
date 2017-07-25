<?php
include('dbcon.php');
include ('session.php');
if (isset($_POST['delete_pics'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM hgallery where id='$id[$i]'");
        $conn->query("insert into activity_log (username,date,action) values('$session_id',NOW(),'Deleted a pic')")or die (mysql_error());
    }
    header("location: update_hgallery.php");
}
?>