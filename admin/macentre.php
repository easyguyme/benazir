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
                    <div class="box box-info">

                        <div class="box-header with-border">

                            <h3 class="box-title">View Map</h3>

                        </div>

                        <div class="box-body">

                            <?php
                            $query = $conn->query("select * from ward where page='makina'");
                            while ($row = $query->fetch()) {

                            ?>
                            <iframe class="responsive" src="<?php echo $row['map']; ?>" width="600" height="380"></iframe>



                        </div>


                    </div>



                    <!-- /Pic to be changed -->

                </div>


                <div class="col-md-6">
                    <div class="box box-danger">

                        <div class="box-header with-border">

                            <h3 class="box-title">View Centre brief</h3>

                        </div>

                        <div class="box-header with-border">
                            <h3 class="box-title">About this centre</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <strong><i class="fa fa-book margin-r-5"></i> Background info</strong>

                            <p class="text-muted">
                                <?php echo $row['info']; ?>
                            </p>

                            <hr>

                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                            <p class="text-muted"><?php echo $row['location']; ?></p>

                            <hr>
                            <strong><i class="fa fa-money margin-r-5"></i> Funding Agency</strong>

                            <p class="text-muted"><?php echo $row['funding']; ?></p>

                            <hr>
                            <strong><i class="fa fa-database margin-r-5"></i>Objectives</strong>

                            <p>
                                <span class="label label-danger"><?php echo $row['obj1']; ?></span>
                                <span class="label label-success"><?php echo $row['obj2']; ?></span>
                                <span class="label label-info"><?php echo $row['obj3']; ?></span>
                                <span class="label label-warning"><?php echo $row['obj4']; ?></span>

                            </p>

                            <hr>
                            <strong><i class="fa fa-list-alt margin-r-5"></i>Activities</strong>

                            <p>
                                <span class="label label-danger"><?php echo $row['act1']; ?></span>
                                <span class="label label-success"><?php echo $row['act2']; ?></span>
                                <span class="label label-info"><?php echo $row['act3']; ?></span>
                                <span class="label label-warning"><?php echo $row['act4']; ?></span>

                            </p>


                            <strong><i class="fa fa-line-chart margin-r-5"></i>Achievements</strong>

                            <p>
                                <span class="label label-danger"><?php echo $row['ach1']; ?></span>
                                <span class="label label-success"><?php echo $row['ach2']; ?></span>
                                <span class="label label-info"><?php echo $row['ach3']; ?></span>
                                <span class="label label-warning"><?php echo $row['ach4']; ?></span>

                            </p>


                            <?php } ?>

                        </div>


                    </div>

                </div>

            </div>


            <div class="row" id="edit">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="row-fluid">
                            <!-- block -->
                            <div id="block_bg" class="block">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit centre details</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form action="#" method="post">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >


                                                <thead>
                                                <tr>

                                                    <th>Background</th>
                                                    <th>Location</th>
                                                    <th>Funding Agency</th>
                                                    <th>Objectives</th>
                                                    <th>Activities</th>
                                                    <th>Achievements</th>

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from ward where page='makina'");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['id'];
                                                    ?>

                                                    <tr>

                                                        <td><?php echo $row['info']; ?></td>
                                                        <td><?php echo $row['location']; ?></td>
                                                        <td><?php echo $row['funding']; ?></td>
                                                        <td><?php echo $row['obj1']; ?>, <?php echo $row['obj2']; ?>, <?php echo $row['obj3']; ?>, <?php echo $row['obj4']; ?></td>
                                                        <td><?php echo $row['act1']; ?>, <?php echo $row['act2']; ?>, <?php echo $row['act3']; ?>, <?php echo $row['act4']; ?></td>
                                                        <td><?php echo $row['ach1']; ?>, <?php echo $row['ach2']; ?>, <?php echo $row['ach3']; ?>, <?php echo $row['ach4']; ?></td>

                                                        <td width="30"><a href="editmacenter.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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


<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>

</body>
</html>


