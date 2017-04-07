<?php
include('dbcon.php');
if (isset($_POST['delete_plan'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM  planned where id='$id[$i]'");
    }
    header("location:upproj.php");
}
?>