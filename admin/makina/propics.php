<?php
include('dbcon.php');
if (isset($_POST['propics'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM maproimg where id='$id[$i]'");
    }
    header("location: progallery.php");
}
?>