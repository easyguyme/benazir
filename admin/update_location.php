<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php include('sidebar.php'); ?>
    <?php $get_id = $_GET['id']; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DASHBOARD | ADMIN PANEL
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <!--todo add editable heading-->
        <section class="content">

<div class="row">
    <div class="col-md-2">


    </div>
    <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <?php
                            $query = $conn->query("select * from hlocation where id='$get_id'");
                            while ($row = $query->fetch()) {

                            ?>
                            <h3 class="box-title">Update <?php echo $row['name']; ?> Location details</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" class="form-horizontal" accept-charset="utf-8" enctype="multipart/form-data">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Voice center name:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $row['name']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="linfo" class="col-sm-2 control-label">Name:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="linfo" class="form-control" id="linfo" placeholder="Location" value="<?php echo $row['linfo']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description" class="col-sm-2 control-label">Location:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="description" class="form-control" id="description" placeholder="Description" value="<?php echo $row['description']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cord" class="col-sm-2 control-label">Cordinates:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="cord" class="form-control" id="cord" placeholder="cord" value="<?php echo htmlentities($row['cord']); ?>" required>
                                    </div>
                                </div>

                                <?php } ?>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="update" class="btn btn-danger">Update</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
    <div class="col-md-2">


    </div>
            </div>
            <!--third row-->



        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->

    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<?php include('hscripts.php'); ?>


<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>


<?php
include('dbcon.php');
if (isset($_POST['update'])){
    $name = $_POST['name'];
    $linfo = $_POST['linfo'];
    $description = $_POST['description'];
    $cord =$_POST['cord'];
$cords= addslashes($cord);

    $conn->query("update hlocation set name = '$name', linfo='$linfo', description ='$description', cord='$cords'   where id = '$get_id' ")or die(mysql_error());


    ?>
    <script>
        window.location = "home.php";
    </script>
    <?php

}
?>