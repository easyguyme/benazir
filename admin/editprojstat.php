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
        <?php $get_page = $_GET['page']; ?>
        <?php $get_body = $_GET['body']; ?>
        <!-- Main content -->
        <!--todo add editable heading-->
        <section class="content">

            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <?php

                        $query = $conn->query("select * from proj_status  where page='$get_page' AND body='$get_body'") or die(mysql_error());
                        while ($row = $query->fetch()) {


                            ?>
                            <div class="box-header with-border">
                                <h3 class="box-title">Edit  <?php echo $row['page']; ?> <?php echo $row['body']; ?></h3>
                                <h4 class="box-title">(Do not Exceed 100% )</h4>
                            </div>
                        <?php }?>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  method="post">
                            <?php

                            $query = $conn->query("select * from proj_status  where page='$get_page' AND body='$get_body'") or die(mysql_error());
                            while ($row = $query->fetch()) {


                            ?>
                            <div class="box-body">
                                <div class="form-group col-sm-10">
                                    <label for="area" class="control-label">Water:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="water" class="form-control" id="area" placeholder="Water" value="<?php echo $row['water']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="population" class=" control-label">Health:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="health" class="form-control" id="population" placeholder="Health" value="<?php echo $row['health']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="village" class=" control-label">Education:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="education" class="form-control" id="village" placeholder="Education" value="<?php echo $row['education']; ?>" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Sanitation:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="sanitation" class="form-control" id="fund" placeholder="Sanitation" value="<?php echo $row['sanitation']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Solid Waste:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="waste" class="form-control" id="fund" placeholder="Solid waste" value="<?php echo $row['waste']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Drainage:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="drainage" class="form-control" id="fund" placeholder="Drainage" value="<?php echo $row['drain']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Energy:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="energy" class="form-control" id="fund" placeholder="Energy" value="<?php echo $row['energy']; ?>" required>
                                    </div>

                                </div>
                                <div class="form-group col-sm-10">
                                    <label for="fund" class=" control-label">Roads:</label>

                                    <div class="input-group  col-sm-8">

                                        <input type="text" name="road" class="form-control" id="fund" placeholder="Roads" value="<?php echo $row['road']; ?>" required>
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
    $water = $_POST['water'];
    $health = $_POST['health'];
    $education = $_POST['education'];
    $sanitation = $_POST['sanitation'];
    $waste = $_POST['waste'];
    $drainage = $_POST['drainage'];
    $energy = $_POST['energy'];
    $road = $_POST['road'];





    $conn->query("update proj_status set water = '$water', health='$health' ,education='$education',sanitation='$sanitation', waste='$waste',drain='$drainage',energy='$energy',road='$road' where page='$get_page' AND body='$get_body' ")or die(mysql_error());




    ?>
    <script>
        window.location = "editprojstat.php<?php echo '?page='.$get_page.'&body='.$get_body ?>";
    </script>
    <?php

}
?>

