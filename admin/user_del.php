<?php
include('dbcon.php');
if (isset($_POST['userdel'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM registration where user_id='$id[$i]'");
    }
    header("location: register.php");
}
?>