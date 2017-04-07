<?php $get_id = $_GET['id']; ?>

<div class="box box-info">
    <a href="addtestimony.php" class="btn  btn-success">Add New Testimony</a>
    <div class="box-header with-border">
        <h3 class="box-title">Edit Testimony</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form  method="post">
        <?php
        $query = $conn->query("select * from testimony where id='$get_id'");
        while ($row = $query->fetch()) {

            ?>
            <div class="box-body">

                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message:</label>

                    <textarea rows="4" cols="50" name="message" placeholder="Message" required><?php echo $row['message']; ?> </textarea>
                </div>
                <div class="form-group col-sm-10">
                    <label>Name:</label>

                    <div class="input-group  col-sm-8">

                        <input type="text" name="who" class="form-control" id="who" placeholder="Name" value="<?php echo $row['name']; ?>" required>
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
    $message = $_POST['message'];
    $name = $_POST['who'];




    $query="update testimony set message = :message, name=:name where id = '$get_id' ";


    $stmt=$conn->prepare($query);
    $stmt->bindParam(':message', $_POST['message'], PDO::PARAM_STR);
    $stmt->bindParam(':name', $_POST['who'], PDO::PARAM_STR);

    $stmt->execute();






    ?>
    <script>
        window.location = "updatetestimony.php<?php echo '?id='.$get_id; ?>";
    </script>
    <?php

}
?>
