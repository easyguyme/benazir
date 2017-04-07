<?php
include('dbcon.php');

if (isset($_POST['piedes'])) {
   
    $info = $_POST['info'];


    //$conn->query->prepare("update pdes set head = '$title' , des ='$info' where page ='makina' ") or die(mysql_error());
    $query="update pieinfo set  des = :info where page ='makina' ";
    $stmt=$conn->prepare($query);

    $stmt->bindParam(':info', $_POST['info'], PDO::PARAM_STR);
    $stmt->execute();


    ?>
    <script>
        window.location = "index.php";
    </script>
    <?php

}
?>