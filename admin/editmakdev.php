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
                            <h3 class="box-title">Edit Makina Development Projects </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  method="post">

                            <div class="box-body">
                                <?php

                                $query = $conn->query("select * from dev_makina where id='$get_id'");
                                while ($row = $query->fetch()) {


                                    ?>
                                <div class="form-group col-sm-10">
                                    <label for="area" class="control-label">Planned:</label>

                                    <div class="input-group  col-sm-10">

                                        <input type="text" name="planned" class="form-control" id="area" placeholder="planned" value="<?php echo $row['planned']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="population" class=" control-label">On going:</label>

                                    <div class="input-group  col-sm-10">

                                        <input type="text" name="ongoing" class="form-control" id="population" placeholder="ongoing" value="<?php echo $row['ongoing']; ?>" required>
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
                            <h3 class="box-title"><dt>Makina Development Projects </dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">
                            <form action="makdev.php" method="post">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">
                                    <a data-toggle="modal" href="#macopdelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>
                                    <div id="macopdelete" class="modal  fade modal-sm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                            <h3 id="myModalLabel">Delete Project?</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                <p>Are you sure you want to delete the Project you checked?.</p>
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

                                        <th><span class="badge bg-light-blue">Planned</span></th>
                                        <th><span class="badge bg-red">Ongoing</span></th>
                                        <th></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $query = $conn->query("select * from dev_makina ");
                                    while ($row = $query->fetch()) {
                                        $id = $row['id'];

                                        ?>
                                        <tr>
                                            <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                            </td>
                                            
                                            <td><?php echo $row['planned']; ?></td>
                                            <td><?php echo $row['ongoing']; ?></td>
                                            <td width="30"><a href="editmakdev.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>



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
    $planned = $_POST['planned'];
    $ongoing = $_POST['ongoing'];




    $conn->query("update dev_makina set planned = '$planned',ongoing='$ongoing' where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "editmakdev.php<?php echo '?id='.$get_id; ?>";
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
        $query = $conn->query("DELETE FROM dev_makina where id='$id[$i]'");
    }

    ?>
    <script>
        window.location = "makdev.php";
    </script>
    <?php

}
?>
