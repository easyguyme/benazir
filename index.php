<!DOCTYPE html>
<html>
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<?php include('header.php'); ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

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
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">


            <div class="row">
                <?php
                $query = $conn->query("select * from home where id=1");
                while ($row = $query->fetch()) {

                ?>
                <div class="col-md-12">
                    <div class="box">

                        <div class="box-header with-border">
                            <h3 class="box-title"><strong><?php echo $row['title']; ?></strong></h3>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <img class="img-responsive" style="height:30pc;width: 100pc; " src="<?php echo $row['logo']; ?>" alt="Photo">

                                    <?php } ?>
                                    <!-- /Pic to be changed -->
                                    <p>
                                        <?php include('homeinfo.php'); ?>
                                    </p>
                                </div>

                                <div class="col-md-5">
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

                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example12">

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
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- ./box-body -->
                        <div class="box-footer">

                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-6">

                    <?php include ('mmap.php')?>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- Info Boxes Style 2 -->
                    <?php include ('locinfo.php')?>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="row">
                    <?php include ('hquotes.php')?>
                    <!-- /.col -->
                    <?php include ('hgallery.php')?>
                    <!-- /.col -->
                </div>
                <!-- /.description-block -->
            </div>   <!-- Info boxes -->
            <div class="row">
                <?php include('social.php'); ?>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php include('hscripts.php'); ?>
<script>
    $(function () {
        $('#example12').DataTable({
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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $("#read").click(function() {
        $("#hidden").show();
        $("#read").hide();
    });
</script>
</body>
</html>