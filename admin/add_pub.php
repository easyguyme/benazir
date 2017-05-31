
<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Publication</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post" enctype="multipart/form-data">
        <div class="box-body">
            <div class="form-group col-sm-10">
                <label>Heading:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="name" class="form-control" id="event" placeholder="Publication Heading" required>
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
                <textarea rows="4" cols="50" name="descp" placeholder="Publication Description" required> </textarea>

                </div>
            </div>


            <div class="form-group col-sm-10">
                <label>Upload Publication:</label>
                <div class="col-sm-10 input-sm">
                    <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
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
    $name = $_POST['name'];
    $sub = $_POST['sub'];
    $descp = $_POST['descp'];


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../downloads/" . $_FILES["image"]["name"]);
    $location = "http://localhost/umande/downloads/" . $_FILES["image"]["name"];



    $conn->query("insert into downloads (named,sub,des,link) values('$name','$sub','$descp','$location')")or die(mysql_error());
    ?>
    <script>
        window.location = "addpub.php";
    </script>
    <?php

}
?>


