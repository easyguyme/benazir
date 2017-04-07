<div class="row">
    <div class="col-sm-4 col-xs-6">
        <div class="description-block border-right">

            <h5 class="description-header" style="color:darkgreen;"><?php echo "Today is" ; ?></h5>
            <span class="description-text"  style="color:darkred;"><?php echo date("l"); ?></span>
        </div>

        <!-- /.description-block -->
    </div>
    <!-- /.col -->
    <div class="col-sm-4 col-xs-6">
        <div class="description-block border-right">

            <h5 class="description-header"  style="color:darkgreen;"><?php echo "The Date is" ?></h5>
            <span class="description-text" style="color:darkred;"><?php $mydate = strtotime("now");
                echo date('F jS Y', $mydate); ?></span>
        </div>

        <!-- /.description-block -->
    </div>
    <div class="col-sm-4 col-xs-6">
        <div class="description-block border-right">

            <h5 class="description-header"  style="color:darkgreen;" ><?php echo "Time in Kenya" ?></h5>
            <span class="description-text" style="color:darkred;"><?php echo date("h:i:a"); ?></span>
        </div>

        <!-- /.description-block -->
    </div>

</div>
<?php include('dbcon.php'); ?>