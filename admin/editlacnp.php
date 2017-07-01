<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<?php $get_id = $_GET['id']; ?>

<link rel="stylesheet" href="../plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->

<!-- Theme style -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<!-- Makina county complete projects -->
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
            <div class="col-md-6">
                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Laini saba Current NGO Project</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form  method="post">
                        <?php
                        $query = $conn->query("select * from sabacurrent where id='$get_id'");
                        while ($row = $query->fetch()) {

                            ?>
                            <div class="box-body">
                                <div class="form-group col-sm-10">
                                    <label>Project name:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="name" class="form-control"  placeholder="Project name" value="<?php echo $row['name']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label>Project Description:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="des" class="form-control"  placeholder="Project Description" value="<?php echo $row['des']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label>Project Completion % :</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="per" class="form-control"  placeholder="Project Completion percentage" value="<?php echo $row['per']; ?>" required>
                                    </div>

                                </div>
                                <!-- /.input group -->


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button  name="update" class="btn btn-info">Update changes</button>
                            </div>
                        <?php } ?>
                    </form>
                </div>

            </div>
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="box-header with-border">
                                <h3 class="box-title">View Laini saba Current NGO Projects</h3>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="lacnp.php" method="post">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">

                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Project name</th>
                                                <th>Project description</th>
                                                <th>Percentage completion</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = $conn->query("select * from sabacurrent where type='ngo' ");
                                            while ($row = $query->fetch()) {
                                                $id = $row['id'];
                                                ?>

                                                <tr>
                                                    <td width="30">
                                                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                    </td>
                                                    <td><?php echo $row['name']; ?></td>

                                                    <td><?php echo $row['des']; ?></td>
                                                    <td><?php echo $row['per']; ?></td>

                                                    <td width="30"><a href="editlacnp.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
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
include('dbcon.php');
if (isset($_POST['update'])){
    $name = $_POST['name'];
    $des = $_POST['des'];
    $per = $_POST['per'];



    $conn->query("update sabacurrent set name = '$name', des='$des' ,per='$per'  where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "lacnp.php";
    </script>
    <?php

}
?>


