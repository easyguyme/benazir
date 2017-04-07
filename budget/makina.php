<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                MAKINA Ward | Budget Allocation
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="../makina.php"><i class="fa  fa-sticky-note"></i> Makina</a></li>
                <li class="active">Budget Allocation</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Budget Allocation</dt></h3>

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
                                    <th><span class="badge bg-blue">No.</span></th>
                                    <th><span class="badge bg-light-blue">Project</span></th>
                                    <th><span class="badge bg-red">Estimated Cost</span></th>
                                    <th><span class="badge bg-green">Amount Allocated</span></th>
                                    <th><span class="badge bg-purple">Amount Used</span></th>
                                    <th><span class="badge bg-yellow">Budget Variance</span></th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>


                                    <th>1.</th>
                                    <th>Water</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>


                                    <th>2.</th>
                                    <th>Health</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>


                                    <th>3.</th>
                                    <th>Education</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>


                                    <th>4.</th>
                                    <th>Sanitation</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>





                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>


                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Top row -->
            <div class="row">
                <div class="col-md-9">
                    <!-- AREA CHART -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Resources Distribution</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">

                            <div class="box-pane">
                                <canvas id="pieright" style="height:300px"></canvas>
                            </div>


                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- DONUT CHART -->


                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-3">

                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Key</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Info Boxes Style 2 -->
                            <div class="info-box bg-yellow">
                                <span class="info-box-icon"><i class="ion ion-ios-rainy"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Water</span>
                                    <span class="info-box-number">5,200</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 50%"></div>
                                    </div>
                  <span class="progress-description">
                    50% Increase in 5 years
                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="ion ion-ios-medkit"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Health</span>
                                    <span class="info-box-number">92,050</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 20%"></div>
                                    </div>
                  <span class="progress-description">
                    20% Increase in 30 Days
                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="ion ion-ios-briefcase"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Education</span>
                                    <span class="info-box-number">114,381</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-aqua">
                                <span class="info-box-icon"><i class="ion-ios-trash"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sanitation</span>
                                    <span class="info-box-number">163,921</span>

                                    <div class="progress">
                                        <div class="progress-bar" style="width: 40%"></div>
                                    </div>
                  <span class="progress-description">
                    40% Increase in 30 Days
                  </span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                    <!-- /.box -->

                    <!-- PRODUCT LIST -->

                    <!-- /.box -->
                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->

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
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<script src="../plugins/chartjs/Chart.bundle.js"></script>
<script src="../plugins/chartjs/utils.js"></script>



<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->

<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
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

    window.onload = function () {
        <!--load left pie chart -->

        <!--load left pie chart -->
        var ct = document.getElementById("pieright").getContext("2d");
        window.myPieR = new Chart(ct, configs);

    };


</script>
<!-- page script -->
<script>


    var configs = {
        type: 'pie',
        data: {
            datasets: [{
                data: [120, 70, 50, 60],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue

                ],
                label: 'Dataset'
            }],
            labels: [
                "Water",
                "Health",
                "Education",
                "Sanitation"


            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Project Based Resources Distribution'
            }
        }
    };


    var colorNames = Object.keys(window.chartColors);


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
