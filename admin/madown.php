<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<!-- daterange picker -->
<link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="../plugins/iCheck/all.css">
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
<!-- Select2 -->
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="../plugins/select2/select2.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<!-- Makina county complete projects -->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <?php include('top.php');

    error_reporting(E_ALL);
    ?>
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
                <div class="col-md-4">
                    <div class="box box-info">

                        <div class="box-header with-border">
                            <h3 class="box-title">Add Makina Download/Publication</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  method="post">
                            <div class="box-body">
                                <div class="form-group col-sm-10">
                                    <label>Heading:</label>

                                    <div class="input-group  col-sm-10">

                                        <input type="text" name="head" class="form-control"  placeholder="Heading" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label>Subheading:</label>

                                    <div class="input-group  col-sm-10">

                                        <input type="text" name="sub" class="form-control"  placeholder="Sub heading" required>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label>Description:</label>

                                    <div class="input-group  col-sm-10">

                                        <textarea  name="description"  rows="4" cols="50" placeholder="Description" required></textarea>
                                    </div>

                                </div>

                                <div class="form-group col-sm-10">
                                    <label>Link:</label>

                                    <div class="input-group  col-sm-10">

                                        <input type="url" name="link" class="form-control"  placeholder="http://" required>
                                    </div>

                                </div>

                                <!-- /.input group -->


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button  name="save" class="btn btn-info">Save changes</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>

                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Makina Downloads & Publications</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">
                            <form action="madown.php" method="post">
                                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="exampl2">
                                    <a data-toggle="modal" href="#macopdelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>
                                    <div id="macopdelete" class="modal  fade modal-sm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                                            <h3 id="myModalLabel">Delete download/publication?</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger">
                                                <p>Are you sure you want to delete the download/publication you checked?.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
                                            <button name="delete_madown" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
                                        </div>
                                    </div>

                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th><span class="badge bg-light-blue">Heading</span></th>
                                        <th><span class="badge bg-red">Subheading</span></th>
                                        <th><span class="badge bg-green">Description</span></th>
                                        <th><span class="badge bg-purple">Link</span></th>
                                        <th></th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    $query = $conn->query("select * from downloads where page='makina'") or die(mysql_error());
                                    while ($row = $query->fetch()) {
                                        $id = $row['id'];

                                        ?>
                                        <tr>
                                            <td width="30">
                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                            </td>
                                            <td><?php echo $row['named']; ?></td>
                                            <td><?php echo $row['sub']; ?></td>
                                            <td><?php echo $row['des']; ?></td>
                                            <td><?php echo $row['link']; ?></td>
                                            <td width="30"><a href="editmadown.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>



                                        </tr>

                                    <?php }?>
                                    </tbody>
                                </table>



                            </form>


                        </div>


                    </div>

                </div>


            </div>

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
<?php include('hscripts.php'); ?>


<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>
<?php include('logo_modal.php'); ?>
<style>
    .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
    }

    .example-modal .modal {
        background: transparent !important;
    }
</style>
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
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
        $('#datepicker2').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>
<!-- Page script -->
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

<?php
error_reporting(E_ALL);

if (isset($_POST['save'])){
    $name = $_POST['head'];
    $sub = $_POST['sub'];
    $description = $_POST['description'];
    $link = $_POST['link'];
    $page='makina';


    $conn->query("insert into downloads (named,sub,des,link,page) values('$name','$sub','$description','$link','$page')")or die(mysql_error());

    ?>
    <script>
        window.location = "madown.php";
    </script>
    <?php

}
?>

<?php
include('dbcon.php');
if (isset($_POST['delete_madown'])){
    $id=$_POST['selector'];
    $N = count($id);
    for($i=0; $i < $N; $i++)
    {
        $query = $conn->query("DELETE FROM downloads where id='$id[$i]'");
    }

    ?>
    <script>
        window.location = "madown.php";
    </script>
    <?php

}
?>
