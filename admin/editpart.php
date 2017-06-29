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

                            <h3 class="box-title"><dt> View Uploaded Partner Logos</dt></h3>

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




                        $query = $conn->query("select * from partners") or die(mysql_error());
                        $count = $query->rowcount();
                        $slides='';
                        $Indicators='';
                        $counter=0;

                        while ($row = $query->fetch())
                        {


                            $image = $row['image'];
                            if($counter == 0)
                            {
                                $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                                $slides .= '<div class="item active">
            <img src="../scroller/img/' .$image.'" alt="logo" />
            <div class="carousel-caption">
              
            </div>
          </div>';

                            }
                            else
                            {
                                $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                $slides .= '<div class="item">
            <img src="../scroller/img/' .$image.'" alt="logo" />
            <div class="carousel-caption">
              
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

                            <h3 class="box-title">Update Partner Logos</h3>

                        </div>
                        <!-- main header title -->


                        <!-- content -->
                        <form method="post" class="form-horizontal" enctype="multipart/form-data">

                            <div class="box-body">



                                <div class="form-group">
                                    <label for="who" class="col-sm-2 control-label">Image upload:</label>
                                    <div class="col-sm-10 input-sm">
                                        <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                                    </div>


                                    <p class="help-block">Click to upload logo.</p>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="save" class="btn btn-info">Upload</button>

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
                                    <h3 class="box-title">Edit Uploaded partner logos</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form action="editpart.php" method="post">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">
                                                <a data-toggle="modal" href="#makinadelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>

                                                <div id="makinadelete" class="modal  fade modal-sm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                                        <h3 id="myModalLabel">Delete Partner logo(s)?</h3>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert alert-danger">
                                                            <p>Are you sure you want to delete the logo(s) you checked?</p>
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
                                                    <th>Image </th>
                                                    <th>Image Name</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from partners order by id ASC ");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['id'];
                                                    ?>

                                                    <tr>
                                                        <td width="30">
                                                            <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                        </td>
                                                        <td><img class="img-responsive" style="height:100px;width: 100px; " src="../scroller/img/<?php echo $row['image']; ?>" alt="Photo"></td>
                                                        <td><?php echo $row['image']; ?></td>




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
            "lengthChange": false,
            "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
            "searching": false,
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



    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../scroller/img/" . $_FILES["image"]["name"]);
    $location =  $_FILES["image"]["name"];



    $conn->query("insert into partners (image) values('$location')")or die(mysql_error());



    ?>
    <script>
        window.location = "editpart.php";
    </script>
    <?php

}
?>



<?php
if (isset($_POST['makina_pics'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM partners where id='$id[$i]'");
    }
    ?>
    <script>
        window.location = "editpart.php";
    </script>
    <?php

}
?>
