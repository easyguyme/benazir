<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Current NGO Project</h3>
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
                <label>Project Description:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="des" class="form-control"  placeholder="Project Description" required>
                </div>

            </div>
            <div class="form-group col-sm-10">
                <label>Project Completion % :</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="per" class="form-control"  placeholder="Project Completion percentage" required>
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
include('dbcon.php');
if (isset($_POST['save'])){
    $name = $_POST['name'];
    $des = $_POST['des'];
    $per = $_POST['per'];
    $type = 'ngo';


    $conn->query("insert into makinacurrent (name,des,per,type) values('$name','$des','$per','$type')")or die(mysql_error());
    $conn->query("insert into activity_log (username,date,action) values('$session_id',NOW(),'Added current ngo project $name')")or die (mysql_error());

}
?>


