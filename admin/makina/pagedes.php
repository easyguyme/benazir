<?php
include('dbcon.php');

if (isset($_POST['makdes'])) {
    $title = $_POST['title'];
    $info = $_POST['info'];
    

    //$conn->query->prepare("update pdes set head = '$title' , des ='$info' where page ='makina' ") or die(mysql_error());
$query="update pdes set head = :title, des = :info where page ='makina' ";
$stmt=$conn->prepare($query);
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':info', $_POST['info'], PDO::PARAM_STR);
    $stmt->execute();


    ?>
    <script>
        window.location = "index.php";
    </script>
    <?php

}
?>