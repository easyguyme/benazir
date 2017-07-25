<?php $get_id = $_GET['id']; ?>

<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Edit Projects to Social Audit</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <?php
        include('dbcon.php');
        $query = $conn->query("select * from social_audit where id='$get_id'");
        while ($row = $query->fetch()) {

            ?>
            <div class="box-body">
                <div class="form-group col-sm-10">
                    <label>Project name:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="name" class="form-control"  placeholder="Project name" value="<?php echo $row['name']; ?>" required>
                    </div>

                </div>

                <div class="form-group col-sm-10">
                    <label>Social audit stage:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="stage" class="form-control"  placeholder="Social audit stage" value="<?php echo $row['stage']; ?>" required>
                    </div>

                </div>
                <div class="form-group col-sm-10">
                    <label>Stake Holder:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="stake" class="form-control"  placeholder="Project Stake Holder" value="<?php echo $row['stake']; ?>" required>
                    </div>

                </div>
                <div class="form-group col-sm-10">
                    <label>Project Findings:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="finding" class="form-control"  placeholder="Project findings" value="<?php echo $row['finding']; ?>" required>
                    </div>

                </div>

                <!-- /.input group -->


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
    $$name = $_POST['name'];
    $stage = $_POST['stage'];
    $stake = $_POST['stake'];
    $finding = $_POST['finding'];
    $page='makina';



    $conn->query("update social_audit set name = '$name', sdate='$sdate' ,edate='$edate'  where id = '$get_id' ")or die(mysql_error());
    $conn->query("insert into activity_log (username,date,action) values('$session_id',NOW(),'edited social audit')")or die (mysql_error());

    ?>
    <script>
        window.location = "editmccp.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php

}
?>
