<!DOCTYPE html>
<html>
<?php include('header.php'); ?>

<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Women Voices, ICT Choices |
                Wards | Projects Priorities
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>

                <li class="active">Project Priorities</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Ward/County Priorities</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1">

                                <thead>
                                <tr>

                                    <th><span class="badge bg-light-blue">#</span></th>
                                    <th><span class="badge bg-red">Makina</span></th>
                                    <th><span class="badge bg-green">Sarang'ombe</span></th>
                                    <th><span class="badge bg-purple">Lindi</span></th>
                                    <th><span class="badge bg-blue">Laini saba</span></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $conn->query("select * from prior_county where page='makina'");
                                while ($row = $query->fetch()) {

                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['makina']; ?></td>
                                    <td><?php echo $row['sara']; ?></td>
                                    <td><?php echo $row['lindi']; ?></td>
                                    <td><?php echo $row['laini']; ?></td>



                                </tr>

                                                            <?php };  ?>
                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Community Priorities</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                <thead>
                                <tr>

                                    <th><span class="badge bg-light-blue">#</span></th>
                                    <th><span class="badge bg-red">Makina</span></th>
                                    <th><span class="badge bg-green">Sarang'ombe</span></th>
                                    <th><span class="badge bg-purple">Lindi</span></th>
                                    <th><span class="badge bg-blue">Laini saba</span></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $conn->query("select * from prior_com where page='makina'");
                                while ($row = $query->fetch()) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>



                                    </tr>

                                <?php };  ?>



                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>


                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Top row -->


            <!-- Second row -->


            <div class="row">

                <!-- /.col -->
            </div>

            <div class="row">
                <?php include('partners.php'); ?>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('footer.php'); ?>
    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable(
            {
                "paging": true,
                "lengthChange": true,
                "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
                "searching": true,
                "ordering": false,
                "info": true,
                "autoWidth": true
            }
        );
        $('#example2').DataTable({
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
<script src="scroller/js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 0,
            $AutoPlaySteps: 4,
            $SlideDuration: 2500,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 4,
            $SlideWidth: 140,
            $Cols: 7
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 809);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>
<script type="text/javascript">jssor_1_slider_init();</script>

</body>
</html>
