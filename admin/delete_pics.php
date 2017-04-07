<?php
include('dbcon.php');
if (isset($_POST['delete_pics'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM hgallery where id='$id[$i]'");
    }
    header("location: update_hgallery.php");
}
?>