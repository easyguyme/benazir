<?php  include('session.php'); ?>
<?php include('header.php'); ?>
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
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

                    <div class="col-md-3">

                        <!-- /.box -->
                    </div>

                    <div class="col-md-6">
                        <div class="box box-info">


                            <div class="box-header with-border">

                                <h3 class="box-title">Update  Stories</h3>

                            </div>
                            <!-- main header title -->


                            <!-- content -->
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="box-body">

                                    <div class="form-group">

                                        <label for="name" class="col-sm-2 control-label">Heading:</label>

                                        <div class="col-sm-10 input-sm">

                                            <input type="text" name="heading" class="form-control " id="title" placeholder="Name"  required>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <label for="name" class="col-sm-2 control-label">Description:</label>

                                        <div class="col-sm-10 ">
                                            <textarea  name="description" style="width: 30pc; height: 5pc; placeholder="Description" required></textarea>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-2 control-label">Link:</label>

                                        <div class="col-sm-10 input-sm">
                                            <input type="url" name="link" class="form-control" id="desc" placeholder="Link" required>
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
                    <div class="col-md-3">

                        <!-- /.box -->
                    </div>
                </div>


                <div class="row" id="edit">
                    <div class="col-md-12">
                        <div class="box box-info">
                            <div class="row-fluid">
                                <!-- block -->
                                <div id="block_bg" class="block">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">Edit Stories Pics</h3>
                                    </div>
                                    <div class="block-content collapse in">
                                        <div class="span12">
                                            <form action="makina_pics.php" method="post">
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">
                                                    <a data-toggle="modal" href="#makinadelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>

                                                    <?php include('modal_delete.php'); ?>
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Image</th>
                                                        <th>Heading</th>
                                                        <th>Description</th>
                                                        <th>Link</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $query = $conn->query("select * from stories order by date desc");
                                                    while ($row = $query->fetch()) {
                                                        $id = $row['id'];
                                                        ?>

                                                        <tr>
                                                            <td width="30">
                                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                            </td>
                                                            <td><img class="img-responsive" style="height:80px;width: 80px; " src="<?php echo $row['img']; ?>" alt="Photo"></td>
                                                            <td><?php echo $row['head']; ?></td>
                                                            <td><?php echo $row['description']; ?></td>
                                                            <td><?php echo $row['link']; ?></td>
                                                            <td width="30"><a href="editstories.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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
    <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="../plugins/input-mask/jquery.inputmask.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#exampl2').DataTable({
                "paging": true,
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true
            });
        });
    </script>


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
    $heading = $_POST['heading'];
    $description =$_POST['description'];
    $link = $_POST['link'];


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "dist/img/" . $_FILES["image"]["name"]);

    $img= "dist/img/" . $_FILES["image"]["name"];


    $query="insert into stories (img,head,description,link) values(:img,:heading,:description,:link)";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(':img', $img, PDO::PARAM_STR);
    $stmt->bindParam(':heading', $_POST['heading'], PDO::PARAM_STR);
    $stmt->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
    $stmt->bindParam(':link', $_POST['link'], PDO::PARAM_STR);

    $stmt->execute();


    ?>
    <script>
        window.location = "stories.php";
    </script>
    <?php

}
?>