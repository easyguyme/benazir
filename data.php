<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
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
                WARDS| Demographic Data
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="../makina.php"><i class="fa  fa-sticky-note"></i> Area stats</a></li>
                <li class="active">Demographic Data</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Demographic Data</dt></h3>

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
                                    <th><span class="badge bg-light-blue"></span></th>
                                    <th><span class="badge bg-light-blue"></span></th>
                                    <th><span class="badge bg-red">MAKINA</span></th>
                                    <th><span class="badge bg-green">SARANG'OMBE</span></th>
                                    <th><span class="badge bg-purple">LINDI</span></th>
                                    <th><span class="badge bg-yellow">LAINI SABA</span></th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <?php
                                    $query = $conn->query("select * from demo_data where head='area'");
                                    while ($row = $query->fetch()) {

                                    ?>
                                    <th>AREA.</th>
                                        <td></td>
                                    <td><?php echo $row['makina']; ?></td>
                                    <td><?php echo $row['sara']; ?></td>
                                    <td><?php echo $row['lindi']; ?></td>
                                    <td><?php echo $row['laini']; ?></td>

                                    <?php } ?>

                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='population'");
                                    while ($row = $query->fetch()) {

                                    ?>

                                    <th>POPULATION COMPOSITION.</th>
                                        <td></td>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='density'");
                                    while ($row = $query->fetch()) {

                                    ?>

                                    <th>POPULATION DENSITY.</th>
                                        <td></td>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='male'");
                                    while ($row = $query->fetch()) {

                                    ?>

                                    <th rowspan="2" >GENDER:</th>
                                    <th><span class="badge bg-red">Male</span></th>

                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>

                                    <?php } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='female'");
                                    while ($row = $query->fetch()) {

                                    ?>

                                    <th><span class="badge bg-green">Female</span></th>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>

                                    <?php } ?>
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
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Demographic Graph</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">

                            <div class="box-pane">
                                <canvas id="bargraph" style="height:300px"></canvas>
                            </div>


                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- DONUT CHART -->


                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-6">
                    <!-- AREA CHART -->
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Population Density</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">

                            <div class="box-pane">
                                <h3 class="box-title">To be shared by Umande</h3>
                            </div>


                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- DONUT CHART -->


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
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<script src="plugins/chartjs/Chart.bundle.js"></script>
<script src="plugins/chartjs/utils.js"></script>
<!-- page script -->
<script>

    var color = Chart.helpers.color;
    var barChartData = {
        labels: ["Makina", "Sarang'ombe", "Lindi", "Laini saba"],
        datasets: [
            <?php
            $query = $conn->query("select * from demo_data where head='male'");
            while ($row = $query->fetch()) {
            ?>
            {

                label: "Male",
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: ['<?php echo $row['makina']; ?>', '<?php echo $row['sara']; ?>', '<?php echo $row['lindi']; ?>','<?php echo $row['laini']; ?>']

            },
            <?php } ?>

            <?php
            $query = $conn->query("select * from demo_data where head='female'");
            while ($row = $query->fetch()) {
            ?>
            {
                label: "Female",
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: ['<?php echo $row['makina']; ?>', '<?php echo $row['sara']; ?>', '<?php echo $row['lindi']; ?>','<?php echo $row['laini']; ?>']

            }
            <?php } ?>
        ]
    };


    window.onload = function () {
        <!--load left pie chart -->

        <!--load left pie chart -->


        var cx = document.getElementById("bargraph").getContext("2d");
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
                    text: 'Demographic Graph'
                },
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of people (Millions)'

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
