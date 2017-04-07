<?php
include('dbcon.php');
if (isset($_POST['delete_mcbp'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM  makina_cproject where id='$id[$i]'");
    }
    header("location: mcbp.php");
}
?>