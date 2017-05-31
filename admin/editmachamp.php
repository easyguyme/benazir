<?php  include('session.php'); ?>
<?php include('header.php'); ?>
    <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

        <?php include('top.php'); ?>
        <!-- Left side column. contains the logo and sidebar -->

        <?php include('sidebar.php'); ?>
        <?php $get_id = $_GET['id']; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    DASHBOARD | ADMIN PANEL
                    <small>Version 1.0</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>

            <!-- Main content -->
            <!--todo add editable heading-->
            <section class="content">

                <div class="row">
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-8">
                        <div class="box box-info">
                            <div class="box-header with-border">

                                <h3 class="box-title">Update Women champion profile information</h3>

                            </div>
                            <!-- main header title -->


                            <!-- content -->
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="box-body">
                                    <?php
                                    $query = $conn->query("select * from profiles where page='makina' AND id='$get_id'");
                                    while ($row = $query->fetch()) {

                                    ?>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Names:</label>

                                            <div class="col-sm-6 ">
                                                <input type="text" name="name" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['name']; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Designation:</label>

                                            <div class="col-sm-6">
                                                <input type="text" name="designation" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['designation']; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Location:</label>

                                            <div class="col-sm-6 ">
                                                <input type="text" name="location" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['location']; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Age:</label>

                                            <div class="col-sm-4 ">
                                                <input type="text" name="age" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['age']; ?>"  required>

                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-2 control-label">Image Path:</label>

                                        <div class="col-sm-4 input-sm">
                                            <input type="text" name="img" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['image']; ?>"  disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="who" class="col-sm-2 control-label">Image upload:</label>
                                        <div class="col-sm-10 input-sm">
                                            <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                                            <p class="help-block">Click to upload a new image.</p>
                                        </div>



                                    </div>


                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Bio:</label>

                                            <div class="col-sm-10 ">
                                                <textarea  name="bio" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['bio']; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Education:</label>

                                            <div class="col-sm-10 ">
                                                <textarea  name="education" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['education']; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Skills:</label>

                                            <div class="col-sm-10 ">
                                                <p class="help-block" style="color: red;">Enter skills separated by a comma.e.g cooking,travelling,reading (Max 4)</p>
                                                <textarea  name="skill" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['skill1']; ?>,<?php echo $row['skill2']; ?>,<?php echo $row['skill3']; ?>,<?php echo $row['skill4']; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Hobbies:</label>

                                            <div class="col-sm-10 ">
                                                <p class="help-block" style="color: red;">Enter Hobbies separated by a comma.e.g cooking,travelling,reading (Max 4)</p>
                                                <textarea  name="hobby" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['hobby1']; ?>,<?php echo $row['hobby2']; ?>,<?php echo $row['hobby3']; ?>,<?php echo $row['hobby4']; ?></textarea>

                                            </div>
                                        </div>




                                <?php }?>

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                            <button name="save" class="btn btn-info">Save changes</button>

                        </div>
                        <!-- /.box-footer -->
                        </form>

                    </div>

                </div>
                <div class="col-md-2">


                </div>
        </div>
        <!--third row-->



        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <?php include('hscripts.php'); ?>


    <script type="text/javascript">
        $("#read").click(function() {

            $("#hidden").show();
            $("#read").hide();

        });

    </script>
    </body>
    </html>


<?php
include('dbcon.php');
if (isset($_POST['save'])){

    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $locate = $_POST['location'];
    $age = $_POST['age'];
    $bio = $_POST['bio'];
    $education = $_POST['education'];
    $skill =$_POST['skill'];
    list($skill1,$skill2,$skill3,$skill4)=explode(",",$skill);
    $hobby =$_POST['hobby'];
    list($hobby1,$hobby2,$hobby3,$hobby4)=explode(",",$hobby);


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../media/" . $_FILES["image"]["name"]);
    $location = "../media/". $_FILES["image"]["name"];


    $query="update profiles  set named=:named, img=:img where id =:id " or die(mysqli_error());

    $stmt=$conn->prepare($query);
    $stmt->bindParam(':brief', $brief, PDO::PARAM_STR);
    $stmt->bindParam(':img', $location, PDO::PARAM_STR);
    $stmt->bindParam(':id', $get_id, PDO::PARAM_STR);
    $stmt->bindParam(':brief', $brief, PDO::PARAM_STR);
    $stmt->bindParam(':img', $location, PDO::PARAM_STR);
    $stmt->bindParam(':id', $get_id, PDO::PARAM_STR);
    $stmt->bindParam(':brief', $brief, PDO::PARAM_STR);
    $stmt->bindParam(':img', $location, PDO::PARAM_STR);
    $stmt->bindParam(':id', $get_id, PDO::PARAM_STR);
    $stmt->bindParam(':brief', $brief, PDO::PARAM_STR);
    $stmt->bindParam(':img', $location, PDO::PARAM_STR);
    $stmt->bindParam(':id', $get_id, PDO::PARAM_STR);

    $stmt->execute();


    ?>
    <script>
        window.location = "machamp.php";
    </script>
    <?php

}
?>