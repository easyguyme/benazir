<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Projects to Social Audit</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <div class="box-body">
            <div class="form-group col-sm-10">
                <label>Project name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="name" class="form-control"  placeholder="Project name" required>
                </div>

            </div>

            <div class="form-group col-sm-10">
                <label>Social audit stage:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="stage" class="form-control"  placeholder="Social audit stage" required>
                </div>

            </div>
            <div class="form-group col-sm-10">
                <label>Stake Holder:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="stake" class="form-control"  placeholder="Project Stake Holder" required>
                </div>

            </div>
            <div class="form-group col-sm-10">
                <label>Project Findings:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="finding" class="form-control"  placeholder="Project findings" required>
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

<?php
error_reporting(E_ALL);
include('dbcon.php');
if (isset($_POST['save'])){
    $name = $_POST['name'];
    $stage = $_POST['stage'];
    $stake = $_POST['stake'];
    $finding = $_POST['finding'];
    $page='makina';


    $conn->query("insert into social_audit (name,stage,stake,finding,page) values('$name','$stage','$stake','$finding','$page')")or die(mysql_error());


}
?>


