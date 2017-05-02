<?php
include('dbcon.php');

if (isset($_POST['makdes'])) {
    $area = $_POST['area'];
    $population = $_POST['population'];
    $village = $_POST['village'];
    $fund = $_POST['fund'];
    $mca = $_POST['mca'];
    $admin = $_POST['admin'];
    

    //$conn->query->prepare("update pdes set head = '$title' , des ='$info' where page ='makina' ") or die(mysql_error());
$query="update profile_tbl set area = :area, population = :population , village = :village, fund =:fund , mca= :mca,admin=:admin where page ='makina' ";
$stmt=$conn->prepare($query);
    $stmt->bindParam(':area', $_POST['area'], PDO::PARAM_STR);
    $stmt->bindParam(':population', $_POST['population'], PDO::PARAM_STR);
    $stmt->bindParam(':village', $_POST['village'], PDO::PARAM_STR);
    $stmt->bindParam(':fund', $_POST['fund'], PDO::PARAM_STR);
    $stmt->bindParam(':mca', $_POST['mca'], PDO::PARAM_STR);
    $stmt->bindParam(':admin', $_POST['admin'], PDO::PARAM_STR);
    $stmt->execute();


    ?>
    <script>
        window.location = "makina.php";
    </script>
    <?php

}
?>