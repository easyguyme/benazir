<?php
include('dbcon.php');
if (isset($_POST['delete_pub'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM downloads where id='$id[$i]'");
    }
    header("location: addpub.php");
}
?>