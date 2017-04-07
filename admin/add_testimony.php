
<div class="box box-info">

    <div class="box-header with-border">
        <h3 class="box-title">Add Testimony</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">

        <div class="box-body">

            <div class="form-group">
                <label for="message" class="col-sm-2 control-label">Message:</label>

              <textarea rows="4" cols="50" name="message" placeholder="Message" required> </textarea>
            </div>
            <div class="form-group col-sm-10">
                <label>Name:</label>

                <div class="input-group  col-sm-8">

                    <input type="text" name="who" class="form-control" id="who" placeholder="Name" required>
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
    $message = $_POST['message'];
    $name = $_POST['who'];




    $query="insert into testimony (message,name) values(:message,:name)";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(':message', $_POST['message'], PDO::PARAM_STR);
    $stmt->bindParam(':name', $_POST['who'], PDO::PARAM_STR);

    $stmt->execute();

    ?>
    <script>
        window.location = "addtestimony.php";
    </script>
    <?php

}
?>


