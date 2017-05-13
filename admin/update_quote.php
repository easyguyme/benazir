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
                <div class="col-md-2">


                </div>
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-header with-border">

                            <h3 class="box-title">Add Quotes</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" class="form-horizontal" id="quoteForm">

                            <div class="box-body">


                                <div class="form-group">
                                    <label for="who" class="col-sm-2 control-label">By who?:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="who" class="form-control" id="who" placeholder="By who" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="quote" class="col-sm-2 control-label">Quote:</label>

                                    <div class="col-sm-10 ">
                                        <textarea class="textarea" name="neno" id="neno" form="quoteForm"  placeholder="Quote" style="width: 100%; height: 70px;color: #00a7d0; font-size: 14px; line-height: 18px; border: 1px solid #0a2b1d; padding: 10px;"></textarea>
                                    </div>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="save" class="btn btn-success">Save</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <div class="col-md-2">


                </div>
            </div>
            <!--third row-->
            <div class="row" id="edit">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="row-fluid">
                            <!-- block -->
                            <div id="block_bg" class="block">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Uploaded Pics</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form action="del_quote.php" method="post">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">


                                                <?php include('modal_delete.php'); ?>
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Quote</th>
                                                    <th>By</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from quotes");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['id'];
                                                    ?>

                                                    <tr>
                                                        <td width="30">
                                                            <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                        </td>
                                                        <td><?php echo $row['neno']; ?></td>
                                                        <td><?php echo $row['who']; ?></td>

                                                        <td width="30"><a data-toggle="modal" href="#delquote" id="delete"  class="btn btn-sm btn-danger">Delete</a></td>


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
<script src="../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
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
<script>
    $(function () {
        $("#example1").DataTable();
        $('#exampl2').DataTable({
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

<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>


<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $who = $_POST['who'];
    $neno = $_POST['neno'];




    $query="insert into quotes (neno,who) VALUES (:neno,:who)";


    $stmt=$conn->prepare($query);
    $stmt->bindParam(':neno', $_POST['neno'], PDO::PARAM_STR);
    $stmt->bindParam(':who', $_POST['who'], PDO::PARAM_STR);
    $stmt->execute();




    ?>
    <script>
        window.location = "home.php";
    </script>
    <?php

}
?>