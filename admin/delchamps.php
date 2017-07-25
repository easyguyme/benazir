<?php
include('dbcon.php');
include('session.php');
if (isset($_POST['deletechamp'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM profiles where page='makina' and id='$id[$i]'");
        $conn->query("insert into activity_log (username,date,action) values('$session_id',NOW(),'Deleted a champ(s)')")or die (mysql_error());
    }
    header("location: makina_champs.php");
}
?>