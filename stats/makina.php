<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
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
                MAKINA Ward | Area Statistics
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="makina.php"><i class="fa  fa-sticky-note"></i> Makina</a></li>
                <li class="active">Area Statistics</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <span class="info-box-icon bg-blue"><i class="fa fa-pie-chart"></i></span>
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-blue">

                            <!-- /.widget-user-image -->
                              <h3 class="widget-user-username"><a href="../data.php" style="color: white;">DEMOGRAPHIC DATA</a></h3>

                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="../data.php">Area of ward <span class="pull-right badge bg-blue">Km <sup>2</sup></sup></span></a></li>
                                <li><a href="../data.php">Population size <span class="pull-right badge bg-aqua">people</span></a></li>
                                <li><a href="../data.php">Population Density <span class="pull-right badge bg-green">per km<sup>2</sup></span></a></li>
                                <li><a href="../data.php">Gender Ratio<span class="pull-right badge bg-red">Male:Female</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <span class="info-box-icon bg-red"><i class="fa fa-cubes"></i></span>
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-red">

                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username"><a href="../prior.php" style="color: white;">PROJECT PRIORITIES</a></h3>

                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="../prior.php">County/Ward Priorities <span class="pull-right badge bg-blue"></sup></span></a></li>
                                <li><a href="../prior.php">Community project priorities <span class="pull-right badge bg-aqua"></span></a></li>
                                <li><a href="../prior.php"> <span class="pull-right badge bg-aqua"></span></a></li>
                                <li><a href="../prior.php"> <span class="pull-right badge bg-aqua"></span></a></li>
                                <li><a href="#"> <span class="pull-right badge bg-aqua"></span></a></li>
                                <li><a href="#"> <span class="pull-right badge bg-aqua"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <span class="info-box-icon bg-green"><i class="fa fa-database"></i></span>
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-green">

                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username"><a href="../dev/makina.php" style="color: white;">DEVELOPMENT PROJECTS</a></h3>

                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="../dev/makina.php">Ongoing Projects <span class="pull-right badge bg-blue"></sup></span></a></li>
                                <li><a href="../dev/makina.php">Planned Projects <span class="pull-right badge bg-aqua"></a></li>
                                <li><a href="../dev/makina.php">Projects Implementers <span class="pull-right badge bg-green"></sup></span></a></li>
                                <li><a href="../dev/makina.php">Projects Status<span class="pull-right badge bg-red"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>
                <div class="col-md-3">
                    <!-- Widget: user widget style 1 -->
                    <div class="box box-widget widget-user-2">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-money"></i></span>
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-aqua">

                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username"><a href="../budget/makina.php" style="color: white;">BUDGET ALLOCATIONS</a></h3>

                        </div>
                        <div class="box-footer no-padding">
                            <ul class="nav nav-stacked">
                                <li><a href="../budget/makina.php">Budget Allocation <span class="pull-right badge bg-blue">Millions</sup></span></a></li>
                                <li><a href="../budget/makina.php"> <span class="pull-right badge bg-aqua"></span></a></li>
                                <li><a href="../budget/makina.php"> <span class="pull-right badge bg-green"></span></a></li>
                                <li><a href="../budget/makina.php"><span class="pull-right badge bg-red"></span></a></li>
                                <li><a href="../budget/makina.php"> <span class="pull-right badge bg-aqua"></span></a></li>
                                <li><a href="../budget/makina.php"> <span class="pull-right badge bg-green"></span></a></li>
                                <li><a href="../budget/makina.php"><span class="pull-right badge bg-red"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </div>


            </div>
            <div class="row">


                <!-- /.col -->
            </div>
            <div class="row">
              <?php include ('partners.php');?>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Developed by <a href="#">Mitchsofts</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Umande Trust</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
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
<script>
    $(function () {
        $("#example4").DataTable();
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[4, 10, 20, -1], [4, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
    });
</script>
<script src="../scroller/js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>


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
