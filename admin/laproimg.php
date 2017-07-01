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

                    <div class="col-md-6">
                        <div class="box box-solid">
                            <div class="box-header with-border">

                                <h3 class="box-title"><dt> View Laini saba Uploaded Images</dt></h3>

                            </div>
                            <!-- /.box-header -->
                            <style>


                                .carousel-inner>.item>img, .carousel-inner>.item>a>img
                                {
                                    height:300px;
                                    width:700px;
                                }

                            </style>
                            <?php




                            $query = $conn->query("select * from laproimg order by date desc") or die(mysql_error());
                            $count = $query->rowcount();
                            $slides='';
                            $Indicators='';
                            $counter=0;

                            while ($row = $query->fetch())
                            {

                                $title = $row['title'];
                                $desc = $row['dsc'];
                                $image = $row['image'];
                                if($counter == 0)
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                                    $slides .= '<div class="item active">
            <img src="../saba/' .$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

                                }
                                else
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                    $slides .= '<div class="item">
            <img src="../saba/' .$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
                                }
                                $counter++;
                            }

                            ?>
                            <div class="box-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php echo $Indicators; ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php echo $slides; ?>
                                    </div>

                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="col-md-6">
                        <div class="box box-info">


                            <div class="box-header with-border">

                                <h3 class="box-title">Update Laini saba Gallery</h3>

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
                                            <input type="text" name="descrip" class="form-control" id="desc" placeholder="Type of quote" required>
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
                                        <h3 class="box-title">Edit Laini saba Uploaded Pics</h3>
                                    </div>
                                    <div class="block-content collapse in">
                                        <div class="span12">
                                            <form action="laproimg.php" method="post">
                                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">
                                                    <a data-toggle="modal" href="#makinadelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>
                                                    <div id="makinadelete" class="modal  fade modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                            <h3 id="myModalLabel">Delete Laini saba image(s)?</h3>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="alert alert-danger">
                                                                <p>Are you sure you want to delete the image(s) you checked?</p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
                                                            <button name="makina_pics" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
                                                        </div>
                                                    </div>


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
                                                    $query = $conn->query("select * from laproimg order by date desc");
                                                    while ($row = $query->fetch()) {
                                                        $id = $row['id'];
                                                        ?>

                                                        <tr>
                                                            <td width="30">
                                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                            </td>
                                                            <td><?php echo $row['title']; ?></td>
                                                            <td><?php echo $row['dsc']; ?></td>
                                                            <td><?php echo $row['image']; ?></td>
                                                            <td><?php echo $row['date']; ?></td>
                                                            <td width="30"><a href="editlaproimg.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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
    $title = $_POST['title'];
    $descp = $_POST['descrip'];


    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../saba/" . $_FILES["image"]["name"]);
    $location =  $_FILES["image"]["name"];



    $conn->query("insert into laproimg (title,dsc,image) values('$title','$descp','$location')")or die(mysql_error());



    ?>
    <script>
        window.location = "laproimg.php";
    </script>
    <?php

}else{


}
?>

<?php
include('dbcon.php');
if (isset($_POST['makina_pics'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM laproimg where id='$id[$i]'");
    }
    ?>
    <script>
        window.location = "laproimg.php";
    </script>
    <?php

}
?>