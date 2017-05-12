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
                MAKINA Ward | Plans & Budget
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="makina.php"><i class="fa  fa-sticky-note"></i> Makina</a></li>
                <li class="active">Plans</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-7">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>County Government Priorities</dt></h3>

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
                                    
                                    <th><span class="badge bg-light-blue">Project Name/Type</span></th>
                                    <th><span class="badge bg-red">Project period</span></th>
                                    <th><span class="badge bg-green">Project Location</span></th>
                                    <th><span class="badge bg-purple">Project Budget</span></th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $query = $conn->query("select * from plans_county where page='makina'") or die(mysql_error());
                                while ($row = $query->fetch()) {


                                ?>
                                <tr>
                                   
                                    <td><?php echo $row['types']; ?></td>
                                    <td><?php echo $row['period']; ?></td>
                                    <td><?php echo $row['location']; ?></td>
                                    <td>Ksh. <?php echo $row['budget']; ?></td>


                                </tr>

                                <?php }?>
                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
                <div class="col-md-5">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>COMMUNITY PRIORITIES PROJECTS</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example3">

                                <thead>
                                <tr>
                                   
                                    <th><span class="badge bg-light-blue">Priority</span></th>
                                    <th><span class="badge bg-red">Priority Description</span></th>


                                </tr>
                                </thead>
                                <tbody>
                                <?php

                                $query = $conn->query("select * from plan_comm where page='makina'") or die(mysql_error());
                                while ($row = $query->fetch()) {


                                ?>
                                <tr>
                                   
                                    <td><?php echo $row['prior']; ?></td>
                                    <td><?php echo $row['description']; ?></td>

                                </tr>

                                <?php }?>


                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>

            </div>
            <div class="row">

                <div class="col-md-12">
                    <h1>
                        Downloads and Publications

                    </h1>
                    <!-- The time line -->
                    <ul class="timeline">
                        <?php
                        $query = $conn->query("select * from downloads where page='makina' order by date desc limit 3");
                        while ($row = $query->fetch()) {

                        ?>
                        <li class="time-label">
                  <span class="bg-red">
                   <?php echo $row['date']; ?>
                  </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-envelope bg-blue"></i>

                            <div class="timeline-item">
                                <span class="time">Posted by: <i class="fa fa-user"></i> Admin</span>

                                <h3 class="timeline-header"><a href="#"><?php echo $row['name']; ?></a> <?php echo $row['sub']; ?></h3>

                                <div class="timeline-body">
                                    <?php echo $row['des']; ?>
                                </div>
                                <div class="timeline-footer">
                                    <a href="<?php echo $row['link']; ?>" class="btn btn-primary btn-xs" target="_blank">Download</a>

                                </div>
                            </div>
                        </li>
                        <?php } ?>
                        <!-- timeline item -->

                    </ul>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
              <?php include "partners.php";?>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include "../footer.php";?>

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
