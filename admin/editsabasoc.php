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
<link rel="stylesheet" href="../plugins/select2/select2.min.css">
<!-- Theme style -->
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
                <?php $get_id = $_GET['id']; ?>

                <div class="box box-info">

                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Projects to Social Audit</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form  method="post">
                        <?php
                        include('dbcon.php');
                        $query = $conn->query("select * from social_audit where id='$get_id'");
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
                                    <label>Social audit stage:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="stage" class="form-control"  placeholder="Social audit stage" value="<?php echo $row['stage']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label>Stake Holder:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="stake" class="form-control"  placeholder="Project Stake Holder" value="<?php echo $row['stake']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label>Project Findings:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="finding" class="form-control"  placeholder="Project findings" value="<?php echo $row['finding']; ?>" required>
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
                                <h3 class="box-title">View Projects to Social Audit</h3>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="editsabasoc.php" method="post">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Project name</th>
                                                <th>Social Audit stage</th>
                                                <th>Stake holders involved</th>
                                                <th>Findings</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = $conn->query("select * from social_audit where page='saba' ");
                                            while ($row = $query->fetch()) {
                                                $id = $row['id'];
                                                ?>

                                                <tr>
                                                    <td width="30">
                                                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                    </td>
                                                    <td><?php echo $row['name']; ?></td>

                                                    <td><?php echo $row['stage']; ?></td>
                                                    <td><?php echo $row['stake']; ?></td>
                                                    <td><?php echo $row['finding']; ?></td>
                                                    <td width="30"><a href="editsabasoc.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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
<script src="../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page script -->
<?php
include('dbcon.php');
if (isset($_POST['update'])){
    $name = $_POST['name'];
    $stage = $_POST['stage'];
    $stake = $_POST['stake'];
    $finding = $_POST['finding'];




    $conn->query("update social_audit set name = '$name',stage='$stage' ,stake='$stake',finding='$finding'  where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "editsabasoc.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php

}
?>


