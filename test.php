<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                MAKINA Ward | Development Projects
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="makina.php"><i class="fa  fa-sticky-note"></i> Makina</a></li>
                <li class="active">Development Projects</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Development Projects</dt></h3>

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
                                    <th><span class="badge bg-light-blue">Planned</span></th>
                                    <th><span class="badge bg-red">Ongoing</span></th>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>1.</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>2.</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>3.</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>4.</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>5.</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>6.</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th>7.</th>
                                    <td></td>
                                    <td></td>
                                </tr>






                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
                <div class="col-md-6">
                    <!-- Custom Tabs (Pulled to the right) -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs pull-right">
                            <li class="active"><a href="#tab_1-1" data-toggle="tab">County</a></li>
                            <li><a href="#tab_2-2" data-toggle="tab">C.B.O</a></li>
                            <li><a href="#tab_3-2" data-toggle="tab">N.G.O</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    Compare <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Lindi</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Laini Saba</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Sarang'ombe</a></li>

                                    <li role="presentation" class="divider"></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Go Back</a></li>
                                </ul>
                            </li>
                            <li class="pull-left header"><i class="fa fa-cubes"></i> Project status</li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1-1">
                                <div class="progress-group">
                                    <span class="progress-text"><i class="fa fa-tint"></i>Water</span>
                                    <span class="progress-number"><b>60%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text"><i class="fa fa-hospital-o"></i>Health</span>
                                    <span class="progress-number"><b>50%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-university"></i>Education</span>
                                    <span class="progress-number"><b>30%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-recycle"></i>Sanitation</span>
                                    <span class="progress-number"><b>40%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <i class="fa fa-trash"></i>Solid Waste</span>
                                    <span class="progress-number"><b>60%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-ship"></i>Drainage</span>
                                    <span class="progress-number"><b>70%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-sun-o"></i>Energy</span>
                                    <span class="progress-number"><b>80%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-road"></i>Roads</span>
                                    <span class="progress-number"><b>40%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_2-2">
                                <div class="progress-group">
                                    <span class="progress-text"><i class="fa fa-tint"></i>Water</span>
                                    <span class="progress-number"><b>60%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text"><i class="fa fa-hospital-o"></i>Health</span>
                                    <span class="progress-number"><b>50%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-university"></i>Education</span>
                                    <span class="progress-number"><b>30%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-recycle"></i>Sanitation</span>
                                    <span class="progress-number"><b>40%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <i class="fa fa-trash"></i>Solid Waste</span>
                                    <span class="progress-number"><b>60%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-ship"></i>Drainage</span>
                                    <span class="progress-number"><b>70%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-sun-o"></i>Energy</span>
                                    <span class="progress-number"><b>80%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-road"></i>Roads</span>
                                    <span class="progress-number"><b>40%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="tab_3-2">
                                <div class="progress-group">
                                    <span class="progress-text"><i class="fa fa-tint"></i>Water</span>
                                    <span class="progress-number"><b>60%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <span class="progress-text"><i class="fa fa-hospital-o"></i>Health</span>
                                    <span class="progress-number"><b>50%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                            <span class="sr-only">50% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-university"></i>Education</span>
                                    <span class="progress-number"><b>30%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                            <span class="sr-only">30% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-recycle"></i>Sanitation</span>
                                    <span class="progress-number"><b>40%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="progress-group">
                                    <i class="fa fa-trash"></i>Solid Waste</span>
                                    <span class="progress-number"><b>60%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-ship"></i>Drainage</span>
                                    <span class="progress-number"><b>70%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-sun-o"></i>Energy</span>
                                    <span class="progress-number"><b>80%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.progress-group -->
                                <div class="progress-group">
                                    <i class="fa fa-road"></i>Roads</span>
                                    <span class="progress-number"><b>40%</b> Complete</span>

                                    <div class="progress progress-sm active">
                                        <div class="progress-bar progress-bar-aqua progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
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
                                <canvas id="bar" style="height:300px"></canvas>
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
                            <div class="info-box bg-aqua">
                                <span class="info-box-icon"><i class="ion-ios-pulse-strong"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">ONGOING</span>
                                    <span class="info-box-number">163,921</span>



                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                            <div class="info-box bg-orange">
                                <span class="info-box-icon"><i class="ion ion-load-a"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">PLANNED</span>
                                    <span class="info-box-number">114,381</span>



                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->

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
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<script src="plugins/chartjs/Chart.bundle.js"></script>
<script src="plugins/chartjs/utils.js"></script>



<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->

<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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


<!-- page script -->
<script>

    var color = Chart.helpers.color;
    var barChartData = {
        labels: ["Makina", "Sarang'ombe", "Lindi", "Laini saba"],
        datasets: [
            {
                label: "Ongoing",
                backgroundColor: color(window.chartColors.blue).rgbString(),
                borderColor: window.chartColors.green,
                borderWidth: 1,
                data: [65, 59, 60, 81]
            },
            {
                label: "Planned",
                backgroundColor: color(window.chartColors.orange).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [50, 48, 75,70]
            }
        ]
    };


    window.onload = function () {
        <!--load left pie chart -->

        <!--load left pie chart -->


        var cx = document.getElementById("bar").getContext("2d");
        window.myBarChart = new Chart(cx, {
            type: 'bar',
            data:  barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Projects Graph'
                },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of projects '

                        }

                    }

                    ]
                }
            }
        });
    };


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
