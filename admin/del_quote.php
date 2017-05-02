<?php
include('dbcon.php');
if (isset($_POST['delquo'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM quotes where id='$id[$i]'");
    }
    header("location: update_quote.php");
}
?>