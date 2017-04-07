<?php
include('dbcon.php');
if (isset($_POST['delete_testimony'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM testimony where id='$id[$i]'");
    }
    header("location: addtestimony.php");
}
?>