
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
                <label>End Date:</label>

                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>

                    <input type="text" name="edate" class="form-control pull-right" id="datepicker2" placeholder="End Date" required>
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


<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $event = $_POST['event'];
    $venue = $_POST['venue'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $status = $_POST['status'];




        $conn->query("insert into hevents (event,venue,sdate,edate,status) values('$event','$venue','$sdate','$edate','$status')")or die(mysql_error());
        ?>
        <script>
            window.location = "addevent.php";
        </script>
        <?php

}

?>


