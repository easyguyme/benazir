<?php  include('session.php'); ?>
<?php include('header.php'); ?>
    <body class="hold-transition skin-red sidebar-mini">
    <div class="wrapper">

        <?php include('top.php'); ?>
        <!-- Left side column. contains the logo and sidebar -->

        <?php include('sidebar.php'); ?>

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

                    <?php include ('magallery.php')?>

                    <div class="col-md-6">
                        <div class="box box-info">
                            <a href="#edit" class="btn  btn-danger">Click to edit uploaded sliders</a>

                            <div class="box-header with-border">
                              
                                <h3 class="box-title">Update Makina Gallery</h3>

                            </div>
                            <!-- main header title -->


                            <!-- content -->
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="box-body">

                                    <div class="form-group">

                                        <label for="name" class="col-sm-2 control-label">Title:</label>

                                        <div class="col-sm-10 input-sm">

                                            <input type="text" name="title" class="form-control " id="title" placeholder="Name"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-2 control-label">Description:</label>

                                        <div class="col-sm-10 input-sm">
                                            <input type="text" name="desc" class="form-control" id="desc" placeholder="Type of quote" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="who" class="col-sm-2 control-label">Image upload:</label>
                                        <div class="col-sm-10 input-sm">
                                            <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                                        </div>


                                        <p class="help-block">Click to upload image.</p>
                                    </div>


                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">

                                    <button name="save" class="btn btn-info">Add</button>

                                </div>
                                <!-- /.box-footer -->
                            </form>

                        </div>

                    </div>

                </div>


                <div class="row" id="edit">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="row-fluid">
                                <!-- block -->
                                <div id="block_bg" class="block">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Edit Uploaded Pics</h3>
                                    </div>
                                    <div class="block-content collapse in">
                                        <div class="span12">
                                            <form action="makina_pics.php" method="post">
                                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                                    <a data-toggle="modal" href="#makinadelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>

                                                    <?php include('modal_delete.php'); ?>
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Image Name</th>
                                                        <th>Date Uploaded</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $query = $conn->query("select * from magallery order by date desc");
                                                    while ($row = $query->fetch()) {
                                                        $id = $row['id'];
                                                        ?>

                                                        <tr>
                                                            <td width="30">
                                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                            </td>
                                                            <td><?php echo $row['title']; ?></td>
                                                            <td><?php echo $row['dscn']; ?></td>
                                                            <td><?php echo $row['image']; ?></td>
                                                            <td><?php echo $row['date']; ?></td>
                                                            <td width="30"><a href="edit_magallery.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /block -->



                            </div>


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
    $title = $_POST['title'];
    $descp = $_POST['desc'];


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../makina/" . $_FILES["image"]["name"]);
    $location =  $_FILES["image"]["name"];



    $conn->query("insert into magallery (title,dscn,image) values('$title','$descp','$location')")or die(mysql_error());



    ?>
    <script>
        window.location = "update_magallery.php";
    </script>
    <?php

}
?>