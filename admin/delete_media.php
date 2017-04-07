<?php
include('dbcon.php');
if (isset($_POST['delete_media'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM mediaimg where id='$id[$i]'");
    }
    header("location: media_gallery.php");
}
?>