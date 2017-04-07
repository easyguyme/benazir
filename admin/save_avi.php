<?php
include('dbcon.php');
include('session.php');
error_reporting(E_ALL);

if (isset($_POST['avatar'])) {


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../dist/img/" . $_FILES["image"]["name"]);
    $location = $_FILES["image"]["name"];

    $conn->query("update registration set image = '$location'  where email='$session_id' ")or die(mysql_error());
    // $conn->query("insert into activity_log (date,username,action) values(NOW(),'$user_username','Edit User $username')")or die(mysql_error());

//todo make an insert querry to activity log


    ?>

    <script>
        window.location = "home.php";
    </script>

<?php     }  ?>