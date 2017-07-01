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
                MAKINA Ward | Projects
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="../makina.php"><i class="fa  fa-sticky-note"></i> Makina</a></li>
                <li class="active">Projects</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-7">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Social Audit</dt></h3>

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
                                  
                                    <th><span class="badge bg-light-blue">Project Name</span></th>
                                    <th><span class="badge bg-red">Social Audit Stage</span></th>
                                    <th><span class="badge bg-green">Stake Holders Involved</span></th>
                                    <th><span class="badge bg-purple">Findings</span></th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $conn->query("select * from social_audit where page ='makina' ");
                                while ($row = $query->fetch()) {

                                ?>
                                <tr>

                                   
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['stage']; ?></td>
                                    <td><?php echo $row['stake']; ?></td>
                                    <td><?php echo $row['finding']; ?></td>


                                </tr>
                                <?php } ?>

                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>
                <div class="col-md-5">
                    <div class="box box-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Project Audited Gallery</dt></h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        -
                        <!-- /.box-header -->
                        <div class="box box-solid">

                            <!-- /.box-header -->
                            <style>


                                .carousel-inner>.item>img, .carousel-inner>.item>a>img
                                {
                                    height:300px;
                                    width:700px;
                                }

                            </style>
                            <?php




                            $query = $conn->query("select * from maproimg") or die(mysql_error());
                            $count = $query->rowcount();
                            $slides='';
                            $Indicators='';
                            $counter=0;

                            while ($row = $query->fetch())
                            {

                                $title = $row['title'];
                                $desc = $row['dsc'];
                                $image = $row['image'];
                                if($counter == 0)
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                                    $slides .= '<div class="item active">
            <img src="../makina/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

                                }
                                else
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                    $slides .= '<div class="item">
            <img src="../makina/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
                                }
                                $counter++;
                            }

                            ?>
                            <div class="box-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php echo $Indicators; ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php echo $slides; ?>
                                    </div>

                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="../profile/makina.php" class="uppercase">View More</a>
                        </div>
                    </div>
                    <!-- /.box -->

                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Top row -->
            <div class="row">

                <!-- /.col -->
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Current Projects</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Custom Tabs -->
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#tab_1" data-toggle="tab">County Government Projects</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">N.G.O Projects</a></li>
                                            <li><a href="#tab_3" data-toggle="tab">C.B.O Projects</a></li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example22">

                                                        <thead>
                                                        <tr>

                                                            <th><span class="badge bg-light-blue">Project Name</span></th>
                                                            <th><span class="badge bg-red">Budget Description</span></th>
                                                            <th><span class="badge bg-purple">Percentage completed</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $conn->query("select * from makinacurrent where type='county'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <tr>

                                                            <td><?php echo $row['name']; ?>.</td>
                                                            <td><?php echo $row['des']; ?></td>
                                                            <td> <span class="label label-warning "><?php echo $row['per']; ?> Complete</span></a></td>
                                                            <?php }?>

                                                        </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_2">
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example23">

                                                        <thead>
                                                        <tr>

                                                            <th><span class="badge bg-light-blue">Project Name</span></th>
                                                            <th><span class="badge bg-red">Budget Description</span></th>
                                                            <th><span class="badge bg-purple">Percentage completed</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $conn->query("select * from makinacurrent where type='ngo'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <tr>

                                                            <td><?php echo $row['name']; ?>.</td>
                                                            <td><?php echo $row['des']; ?></td>
                                                            <td> <span class="label label-warning "><?php echo $row['per']; ?> Complete</span></a></td>
                                                            <?php }?>

                                                        </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_3">
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example24">

                                                        <thead>
                                                        <tr>

                                                            <th><span class="badge bg-light-blue">Project Name</span></th>
                                                            <th><span class="badge bg-red">Budget Description</span></th>
                                                            <th><span class="badge bg-purple">Percentage completed</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $conn->query("select * from makinacurrent where type='cbo'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <tr>

                                                            <td><?php echo $row['name']; ?>.</td>
                                                            <td><?php echo $row['des']; ?></td>
                                                            <td> <span class="label label-warning "><?php echo $row['per']; ?> Complete</span></a></td>
                                                            <?php }?>

                                                        </tr>



                                                        </tbody>
                                                    </table>

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
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Completed Projects</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Custom Tabs -->
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#county" data-toggle="tab">County Government Projects</a></li>
                                            <li><a href="#ngo" data-toggle="tab">N.G.O Projects</a></li>
                                            <li><a href="#cbo" data-toggle="tab">C.B.O Projects</a></li>


                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="county">

                                                <!-- /.box-header -->
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example25">

                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Start date</th>
                                                            <th>End date</th>
                                                            <th>Status</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $conn->query("select * from makina_cproject where org='county'");
                                                        while ($row = $query->fetch()) {
                                                            $id = $row['id'];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row['sdate']; ?></td>
                                                                <td><?php echo $row['edate']; ?></td>
                                                                <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->

                                                <!-- /.box-body -->

                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="ngo">

                                                <!-- /.box-header -->
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example26">

                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Start date</th>
                                                            <th>End date</th>
                                                            <th>Status</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $conn->query("select * from makina_cproject where org='ngo'");
                                                        while ($row = $query->fetch()) {
                                                            $id = $row['id'];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row['sdate']; ?></td>
                                                                <td><?php echo $row['edate']; ?></td>
                                                                <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->

                                                <!-- /.box-footer -->
                                            </div>

                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="cbo">

                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example27">

                                                        <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Start date</th>
                                                            <th>End date</th>
                                                            <th>Status</th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                        $query = $conn->query("select * from makina_cproject where org='cbo'");
                                                        while ($row = $query->fetch()) {
                                                            $id = $row['id'];
                                                            ?>
                                                            <tr>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row['sdate']; ?></td>
                                                                <td><?php echo $row['edate']; ?></td>
                                                                <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                                                            </tr>
                                                        <?php } ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->



                                                <!-- /.box-body -->

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
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                </div>

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

    <?php include('../footer.php'); ?>
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
        $('#example22').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
        $('#example23').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
        $('#example24').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
        $('#example25').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
        $('#example26').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
        $('#example27').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
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
