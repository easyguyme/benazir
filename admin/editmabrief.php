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

                                <h3 class="box-title">Update brief information and image</h3>

                            </div>
                            <!-- main header title -->


                            <!-- content -->
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="box-body">
                                    <?php
                                    $query = $conn->query("select * from ward where page='makina' AND id='$get_id'");
                                    while ($row = $query->fetch()) {

                                        ?>

                                        <div class="form-group">
                                            <label for="type" class="col-sm-2 control-label">Image Path:</label>

                                            <div class="col-sm-10 input-sm">
                                                <input type="text" name="img" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['img']; ?>"  disabled>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="who" class="col-sm-2 control-label">Image upload:</label>
                                            <div class="col-sm-10 input-sm">
                                                <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                                                <p class="help-block">Click to upload a new image.</p>
                                            </div>



                                        </div>
                                        <div class="form-group"  ">

                                            <label for="name" class="col-sm-2 control-label">Brief info:</label>

                                            <div class="col-sm-10 ">
                                                <textarea  name="brief" style="width: 45pc; height: 15pc; placeholder="Description" required><?php echo $row['brief']; ?></textarea>

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

    $brief = $_POST['brief'];


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../media/" . $_FILES["image"]["name"]);
    $location = "../media/". $_FILES["image"]["name"];


    $query="update ward  set brief=:brief, img=:img where id =:id " or die(mysqli_error());

    $stmt=$conn->prepare($query);
   
    $stmt->bindParam(':brief', $brief, PDO::PARAM_STR);
    $stmt->bindParam(':img', $location, PDO::PARAM_STR);
    $stmt->bindParam(':id', $get_id, PDO::PARAM_STR);

    $stmt->execute();


    ?>
    <script>
        window.location = "mabrief.php";
    </script>
    <?php

}
?>