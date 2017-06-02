
<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Publication</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post" id="pub" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group col-sm-10">
                <label>Heading:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="named" class="form-control" id="event" placeholder="Publication Heading" required>
                </div>

            </div>
            <div class="form-group col-sm-10">
                <label>Sub heading:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="sub" class="form-control" id="venue" placeholder="Publication Heading" required>
                </div>

            </div>
            <div class="form-group col-sm-10">
                <label>Publication Description:</label>
                <div class="input-group  col-sm-8">
                <textarea rows="4" cols="50" name="des" placeholder="Publication Description" required> </textarea>

                </div>
            </div>


            <div class="form-group col-sm-10">
                <label>Upload Publication:</label>
                <div class="col-sm-10 input-sm">
                    <input name="file" class="input-file uniform_on" id="fileInput" type="file" required>
                </div>

            </div>




            <!-- /.input group -->


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button  name="save" class="btn btn-info">Save changes</button>
        </div>
        <!-- /.box-footer -->
    </form>
</div>

<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $named = $_POST['named'];
    $sub = $_POST['sub'];
    $des = $_POST['des'];





    $allowedExts = array("doc", "docx", "pdf", "gif", "jpeg", "jpg", "png","xls", "xlsx");
    $extension = end(explode(".", $_FILES["file"]["name"]));
    if (($_FILES["file"]["type"] == "application/pdf")
        || ($_FILES["file"]["type"] == "image/gif")
        || ($_FILES["file"]["type"] == "image/jpeg")
        || ($_FILES["file"]["type"] == "image/jpg")
        || ($_FILES["file"]["type"] == "application/msword")
        || ($_FILES["file"]["type"] == "application/msword")
        || ($_FILES["file"]["type"] == "application/vnd.ms-excel")
        || ($_FILES["file"]["type"] == "application/vnd.ms-excel")
        || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")
        || ($_FILES["file"]["type"] == "image/pjpeg")
        || ($_FILES["file"]["type"] == "image/x-png")
        || ($_FILES["file"]["type"] == "image/png")
        && ($_FILES["file"]["size"] < 2000000)
        && in_array($extension, $allowedExts))
    {
        if ($_FILES["file"]["error"] > 0)
        {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {


            if (file_exists("../downloads/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], "../downloads/" . $_FILES["file"]["name"]);


                $link = "http://localhost/umande/downloads/" . $_FILES["file"]["name"];

                $query="insert into downloads (named,sub,des,link) values(:named,:sub,:des,:link)";
                $stmt=$conn->prepare($query);

                $stmt->bindParam(':named',  $_POST['named'], PDO::PARAM_STR);
                $stmt->bindParam(':sub', $_POST['sub'], PDO::PARAM_STR);
                $stmt->bindParam(':des', $_POST['des'], PDO::PARAM_STR);
                $stmt->bindParam(':link', $link, PDO::PARAM_STR);

                $stmt->execute();

            }
        }
    }
    else
    {
        echo "Invalid file";
    }






    ?>
    <script>
        window.location = "addpub.php";
    </script>
    <?php

}
?>

