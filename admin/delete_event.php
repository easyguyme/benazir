<?php
include('dbcon.php');
if (isset($_POST['delete_event'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM hevents where id='$id[$i]'");
    }
    header("location: addevent.php");
}
?>