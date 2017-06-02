<?php
/**
 * Created by PhpStorm.
 * User: Mitch
 * Date: 6/2/2017
 * Time: 11:14 AM
 */


include('dbcon.php');
if (isset($_POST['story'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM stories where id='$id[$i]'");
    }
    header("location: stories.php");
}
?>