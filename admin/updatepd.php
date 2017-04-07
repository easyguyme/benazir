<?php
include('dbcon.php');

if (isset($_POST['changez'])) {
    $title = $_POST['title'];
    $info = $_POST['info'];
    $remo = $_POST['remo'];


    $query="update home set title = :title , info =:info , remo = :remo where id =1 ";

    $stmt=$conn->prepare($query);
    $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(':info', $_POST['info'], PDO::PARAM_STR);
    $stmt->bindParam(':remo', $_POST['remo'], PDO::PARAM_STR);
    $stmt->execute();




    ?>

    <script>
        window.location = "home.php";
    </script>

<?php     }  ?>