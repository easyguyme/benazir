<!DOCTYPE html>
<html>

<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<?php include('header.php'); ?>
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
                Women Voices, ICT Choices
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Calendar</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-2">

                    <!-- /. box -->
                </div>
                <div class="col-md-8">
                    <div class="box box-success">

                        <div id="calendar"></div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                </div>
                <!-- /.col -->
                <div class="col-md-2">

                    <!-- /. box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Events</dt></h3>

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

                                    <th>Event</th>
                                    <th>Venue</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $conn->query("select * from hevents ORDER BY tarehes DESC ");
                                while ($row = $query->fetch()) {

                                    ?>
                                    <tr>

                                        <td><?php echo $row['event']; ?></td>
                                        <td><?php echo $row['venue']; ?></td>
                                        <td><?php echo $row['sdate']; ?></td>
                                        <td><?php echo $row['edate']; ?></td>
                                        <td><span class="label label-success"><?php echo $row['status']; ?></span></td>


                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>

                        </div>


                    </div>
                    <!-- /. box -->
                </div>

                    <?php include('hgallery.php');?>
                    <!-- /. box -->
                
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('footer.php');?>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->

<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->


<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });





    });
</script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>
