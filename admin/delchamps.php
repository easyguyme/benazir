<?php
include('dbcon.php');
if (isset($_POST['deletechamp'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM profiles where page='makina' and id='$id[$i]'");
    }
    header("location: makina_champs.php");
}
?>