
<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Event</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <div class="box-body">
            <div class="form-group col-sm-10">
                <label>Event name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="event" class="form-control" id="event" placeholder="Event name" required>
                </div>

            </div>
            <div class="form-group col-sm-10">
                <label>Event Venue:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="venue" class="form-control" id="venue" placeholder="Event venue" required>
                </div>

            </div>

            <div class="form-group col-sm-7">
                <label>Start Date:</label>

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="sdate" class="form-control pull-right" id="datepicker" placeholder="Start Date" required>
                </div>
            </div>
            <div class="form-group col-sm-7">
                <div class="bootstrap-timepicker">
                    <div class="form-group">
                        <label>Start Time:</label>

                        <div class="input-group">
                            <input type="text" class="form-control timepicker">

                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                </div>
            </div>
            <div class="form-group col-sm-7">
                <label>End Date:</label>

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="edate" class="form-control pull-right timepicker" id="datepicker2" placeholder="End Date" required>
                </div>
            </div>
            <div class="form-group col-sm-7">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <label>End Time:</label>

                    <div class="input-group">
                        <input type="text" class="form-control timepicker">

                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
            </div>
            </div>
            <div class="form-group col-sm-7">
                    <label>Event Status</label>
                    <select name="status" class="form-control" required>
                        <option></option>
                        <option>Ongoing</option>
                        <option>Upcoming</option>
                        <option>Cancelled</option>
                    </select>
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
<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("yyyy/mm/dd", {"placeholder": "yyyy/mm/dd"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').timepicker({ 'scrollDefault': 'now' });
        //Date range as a button


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

<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $event = $_POST['event'];
    $venue = $_POST['venue'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $status = $_POST['status'];
$split=explode("/", $sdate);
    $sday=$split[0];
    $smonth=$split[1];
    $syear=$split[2];



        $conn->query("insert into hevents (event,venue,sday,smonth,syear,edate,status) values('$event','$venue','$sday','$smonth','$syear','$edate','$status')")or die(mysql_error());
        ?>
        <script>
            window.location = "addevent.php";
        </script>
        <?php

}

?>


