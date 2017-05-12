<?php  include('session.php'); ?>
<?php include('header.php'); ?>
    <!-- daterange picker -->
<?php $get_id = $_GET['id']; ?>
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
                    <div class="col-md-6">
                        <div class="box box-info">

                            <div class="box-header with-border">
                                <h3 class="box-title">Add Makina Events</h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form  method="post">
                                <div class="box-body">
                                    <?php

                                    $query = $conn->query("select * from events where id='$get_id'");
                                    while ($row = $query->fetch()) {
                                        ?>
                                        <div class="form-group col-sm-10">
                                            <label>Event name:</label>

                                            <div class="input-group  col-sm-8">

                                                <input type="text" name="event" class="form-control"  placeholder="Event name" value="<?php echo $row['namew']; ?>" required>
                                            </div>

                                        </div>
                                        <div class="form-group col-sm-10">
                                            <label>Venue:</label>

                                            <div class="input-group  col-sm-8">

                                                <input type="text" name="venue" class="form-control"  placeholder="Venue" value="<?php echo $row['venue']; ?>" required>
                                            </div>

                                        </div>
                                        <div class="form-group col-sm-7">
                                            <label>Start Date:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </div>
                                                <input type="text" name="datew" class="form-control pull-right" id="datepicker" placeholder="Date"  value="<?php echo $row['datew']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-7 bootstrap-timepicker">
                                            <label>Time:</label>

                                            <div class="input-group">
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <input type="text" name="timew" class="form-control timepicker" value="<?php echo $row['timew']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-7">
                                            <label>Status:</label>
                                            <select name="status" class="form-control select2" style="width: 100%;" >
                                                <option selected="selected"><?php echo $row['status']; ?></option>
                                                <option>Ongoing</option>
                                                <option>Canceled</option>
                                                <option>Upcoming</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-sm-10">
                                            <label>Description:</label>

                                            <div class="input-group  col-sm-8">

                                                <input type="text" name="description" class="form-control"  placeholder="description" value="<?php echo $row['description']; ?>" required>
                                            </div>

                                        </div>
                                    <?php }?>

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

                    <div class="col-md-6">
                        <div class="box box-info">
                            <div class="row-fluid">
                                <!-- block -->
                                <div id="block_bg" class="block">
                                    <div class="box-header with-border">
                                        <h3 class="box-title">View Events</h3>
                                    </div>
                                    <div class="block-content collapse in">
                                        <div class="span12">
                                            <form action="makina_event.php" method="post">
                                                <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                                  <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Event name</th>
                                                        <th>Event venue</th>
                                                        <th>Event date</th>
                                                        <th>Event time</th>
                                                        <th>Event status</th>
                                                        <th>Event description</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $query = $conn->query("select * from events where page='makina'");
                                                    while ($row = $query->fetch()) {
                                                        $id = $row['id'];
                                                        ?>

                                                        <tr>
                                                            <td width="30">
                                                                <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                            </td>

                                                            <td><?php echo $row['namew']; ?></td>
                                                            <td><?php echo $row['venue']; ?></td>
                                                            <td><?php echo $row['datew']; ?></td>
                                                            <td><?php echo $row['timew']; ?></td>
                                                            <td><?php echo $row['status']; ?></td>
                                                            <td><?php echo $row['description']; ?></td>
                                                            <td width="30"><a href="editevents.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>

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



<?php
error_reporting(E_ALL);

if (isset($_POST['save'])){
    $name = $_POST['event'];
    $venue = $_POST['venue'];
    $date = $_POST['datew'];
    $time = $_POST['timew'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $page='makina';


    //$conn->query("insert into events (namew,venue,datew,timew,status,description,page) values('$name','$venue','$date','$time','$status','$description','$page')")or die(mysql_error());
    $conn->query("update events set namew = '$name', venue='$venue' ,datew='$date' , timew='$time', status='$status', description='$description', page='$page' where id = '$get_id' ")or die(mysql_error());
    ?>
    <script>
        window.location = "makina_event.php";
    </script>
    <?php

}
?>