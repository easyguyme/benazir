<?php $get_id = $_GET['id']; ?>

<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Edit Complete NGO Project</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <?php
        $query = $conn->query("select * from makina_cproject where id='$get_id'");
        while ($row = $query->fetch()) {

            ?>
            <div class="box-body">

                <div class="form-group col-sm-10">
                    <label>Project name:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="name" class="form-control"  placeholder="Project name" value="<?php echo $row['name']; ?>"  required>
                    </div>

                </div>
                <div class="form-group col-sm-7">
                    <label>Start Date:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="sdate" class="form-control pull-right" id="datepicker" placeholder="Start Date" value="<?php echo $row['sdate']; ?>"  required>
                    </div>
                </div>
                <div class="form-group col-sm-7">
                    <label>End Date:</label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="edate" class="form-control pull-right" id="datepicker2" placeholder="End Date" value="<?php echo $row['edate']; ?>"  required>
                    </div>
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
    $name = $_POST['name'];
    $sdate = $_POST['sdate'];
    $edate = $_POST['edate'];




    $conn->query("update makina_cproject set name = '$name', sdate='$sdate' ,edate='$edate'  where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "editmcnp.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php

}
?>
