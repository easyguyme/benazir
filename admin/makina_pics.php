<?php
include('dbcon.php');
if (isset($_POST['makina_pics'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM magallery where id='$id[$i]'");
    }
    header("location: update_magallery.php");
}
?>