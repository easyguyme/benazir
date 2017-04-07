<?php $get_id = $_GET['id']; ?>

<div class="box box-info">
    <a href="addevent.php" class="btn  btn-success">Add Event</a>
    <div class="box-header with-border">
        <h3 class="box-title">Edit Event</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <?php
        $query = $conn->query("select * from hevents where id='$get_id'");
        while ($row = $query->fetch()) {

        ?>
        <div class="box-body">

            <div class="form-group col-sm-10">

                <label>Event name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="event" class="form-control" id="event" placeholder="Event name"  value="<?php echo $row['event']; ?>" required>
                </div>

            </div>
            <div class="form-group col-sm-10">

                    <label>Event Venue:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="venue" class="form-control" id="venue" placeholder="Event venue"  value="<?php echo $row['venue']; ?>" required>
                    </div>

                </div>
            <div class="form-group col-sm-7">
                    <label>Start Date:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="sdate" class="form-control pull-right" id="datepicker" placeholder="Start Date" value="<?php echo $row['sdate']; ?>" required>
                    </div>
                </div>
            <div class="form-group col-sm-7">
                    <label>End Date:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="edate" class="form-control pull-right" id="datepicker2" placeholder="End Date" value="<?php echo $row['edate']; ?>" required>
                    </div>
                </div>
            <div class="form-group col-sm-7">
                    <label>Event Status</label>
                    <select name="status" class="form-control" required>
                        <option><?php echo $row['status']; ?></option>
                        <option>Ongoing</option>
                        <option>Upcoming</option>
                        <option>Cancelled</option>
                    </select>
                </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button  name="update" class="btn btn-info">Update changes</button>
        </div>
        <?php } ?>
    </form>
</div>

<?php
include('dbcon.php');
if (isset($_POST['update'])){
    $event = $_POST['event'];
    $venue = $_POST['venue'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];
    $status = $_POST['status'];



    $conn->query("update hevents set event = '$event', venue='$venue', sdate='$sdate' ,edate='$edate' , status='$status' where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "editevent.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php

}
?>
