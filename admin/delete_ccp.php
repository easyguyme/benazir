<?php
include('dbcon.php');
if (isset($_POST['delete_ccp'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM  makinacurrent where id='$id[$i]'");
    }
    header("location:ccp.php");
}
?>