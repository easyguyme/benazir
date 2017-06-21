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

                            <h3 class="box-title">View Lindi Picture</h3>

                        </div>

                        <div class="box-body">

                            <?php
                            $query = $conn->query("select * from ward where page='lindi'");
                            while ($row = $query->fetch()) {

                            ?>
                            <img class="img-responsive" style="height:20pc;width: 100pc; " src="<?php echo $row['img']; ?>" alt="Photo">



                        </div>


                    </div>



                    <!-- /Pic to be changed -->

                </div>


                <div class="col-md-6">
                    <div class="box box-danger">

                        <div class="box-header with-border">

                            <h3 class="box-title">View lindi brief</h3>

                        </div>

                        <div class="box-body">

                            <?php echo $row['brief']; ?>
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
                                    <h3 class="box-title">Edit Lindi Brief and Image</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form action="#" method="post">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >


                                                <thead>
                                                <tr>

                                                    <th>Image Path</th>
                                                    <th>Briefing</th>

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from ward where page='lindi'");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['id'];
                                                    ?>

                                                    <tr>

                                                        <td><?php echo $row['img']; ?></td>
                                                        <td><?php echo $row['brief']; ?></td>

                                                        <td width="30"><a href="editlibrief.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>

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




</body>
</html>


