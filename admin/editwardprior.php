<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<!-- daterange picker -->
<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="../plugins/select2/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<!-- Makina county complete projects -->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <?php include('top.php');

    error_reporting(E_ALL);
    ?>
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
        <?php $get_id = $_GET['id']; ?>
        <!-- Main content -->
        <!--todo add editable heading-->
        <section class="content">

            <div class="row">
                <div class="col-md-4">
                    <div class="box box-info">

                        <div class="box-header with-border">
                            <h3 class="box-title">Edit Ward/County Priorities </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  method="post">
                            <?php

                            $query = $conn->query("select * from prior_county  where id='$get_id'") or die(mysql_error());
                            while ($row = $query->fetch()) {


                            ?>
                            <div class="box-body">
                                <div class="form-group col-sm-10">
                                    <label for="area" class="control-label">Makina:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="makina" class="form-control" id="area" placeholder="makina" value="<?php echo $row['makina']; ?>"  required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="population" class=" control-label">Sarang'ombe:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="sara" class="form-control" id="population" placeholder="sarangombe" value="<?php echo $row['sara']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="village" class=" control-label">Lindi:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="lindi" class="form-control" id="village" placeholder="lindi" value="<?php echo $row['lindi']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Laini Saba:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="laini" class="form-control" id="fund" placeholder="laini"  value="<?php echo $row['laini']; ?>" required>
                                    </div>

                                </div>

                                <!-- /.input group -->
                                <?php }?>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button  name="save" class="btn btn-info">Save changes</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Ward/County Priorities </dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">
                            <form action="wardprior.php" method="post">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">
                                    <a data-toggle="modal" href="#macopdelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>
                                    <div id="macopdelete" class="modal  fade modal-sm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                            <h3 id="myModalLabel">Delete priority?</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                <p>Are you sure you want to delete the priority you checked?.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
                                            <button name="delete_macop" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
                                        </div>
                                    </div>

                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th><span class="badge bg-red">Makina</span></th>
                                        <th><span class="badge bg-green">Sarang'ombe</span></th>
                                        <th><span class="badge bg-purple">Lindi</span></th>
                                        <th><span class="badge bg-blue">Laini saba</span></th>
                                        <th></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $query = $conn->query("select * from prior_county") or die(mysql_error());
                                    while ($row = $query->fetch()) {
                                        $id = $row['id'];

                                        ?>
                                        <tr>
                                            <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                            </td>
                                            <td><?php echo $row['makina']; ?></td>
                                            <td><?php echo $row['sara']; ?></td>
                                            <td><?php echo $row['lindi']; ?></td>
                                            <td><?php echo $row['laini']; ?></td>
                                            <td width="30"><a href="editwardprior.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>



                                        </tr>

                                    <?php }?>
                                    </tbody>
                                </table>



                            </form>


                        </div>


                    </div>

                </div>


            </div>

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
<?php include('logo_modal.php'); ?>
<style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
</style>
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


<!-- Page script -->
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

<?php
error_reporting(E_ALL);

if (isset($_POST['save'])){
    $makina = $_POST['makina'];
    $sara = $_POST['sara'];
    $lindi = $_POST['lindi'];
    $laini = $_POST['laini'];




    $conn->query("update prior_county set makina = '$makina',sara='$sara' ,laini='$laini',lindi='$lindi'  where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "editwardprior.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php

}
?>

<?php
include('dbcon.php');
if (isset($_POST['delete_macop'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM prior_county where id='$id[$i]'");
    }

    ?>
    <script>
        window.location = "wardprior.php";
    </script>
    <?php

}
?>
