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
        <?php $get_head = $_GET['head']; ?>

        <!-- Main content -->
        <!--todo add editable heading-->
        <section class="content">

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <?php

                        $query = $conn->query("select * from budget_makina where head='$get_head'");
                        while ($row = $query->fetch()) {


                            ?>
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit Makina <?php echo $row['head']; ?> budget allocation</h3>

                            </div>
                        <?php }?>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  method="post">
                            <?php

                            $query = $conn->query("select * from budget_makina  where head='$get_head'") or die(mysql_error());
                            while ($row = $query->fetch()) {


                            ?>
                            <div class="box-body">
                                <div class="form-group col-sm-10">
                                    <label for="area" class="control-label">Estimated Cost:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="cost" class="form-control" id="area" placeholder="Water" value="<?php echo $row['cost']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="population" class=" control-label">Amount Allocated:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="allocate" class="form-control" id="population" placeholder="Health" value="<?php echo $row['allocated']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="village" class=" control-label">Amount Used:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="used" class="form-control" id="village" placeholder="Education" value="<?php echo $row['used']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Budget Variance:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="variance" class="form-control" id="fund" placeholder="Sanitation" value="<?php echo $row['variance']; ?>" required>
                                    </div>

                                </div>

                                <?php }?>
                                <!-- /.input group -->


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button  name="save" class="btn btn-info">Save changes</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <div class="col-md-3"></div>



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



</body>
</html>


<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->

<!-- InputMask -->

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

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
error_reporting(E_ALL);

if (isset($_POST['save'])){
    $cost = $_POST['cost'];
    $allocate = $_POST['allocate'];
    $used = $_POST['used'];
    $variance = $_POST['variance'];






    $conn->query("update budget_makina set cost='$cost', allocated='$allocate' ,used='$used',variance='$variance' where head='$get_head'")or die(mysql_error());




    ?>
    <script>
        window.location = "editmakbudget.php<?php echo '?head='.$get_head ?>";
    </script>
    <?php

}
?>

