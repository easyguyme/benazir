<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->

    <?php include('sidebar.php'); ?>
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
<div class="col-md-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <?php
            $query = $conn->query("select * from hmap");
            while ($row = $query->fetch()) {

            ?>
            <h3 class="box-title text-center"><strong><?php echo $row['title']; ?></strong></h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <div class="row">
                <div class="">

                    <div class="pad"  >

                        <!-- Map will be created here -->
                        <iframe src=<?php echo $row['url']; ?> width="500" height="480"></iframe>
                    </div>
                    <?php } ?>
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
</div>
<div class="col-md-6">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Update Map url</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="post" class="form-horizontal">
            <?php
            $query = $conn->query("select * from hmap where id='1'");
            while ($row = $query->fetch()) {

            ?>
            <div class="box-body">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Title:</label>

                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?php echo $row['title']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="url" class="col-sm-2 control-label">Url:</label>

                    <div class="col-sm-10">
                        <input type="url" name="url" class="form-control" id="url" placeholder="url" value="<?php echo $row['url']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"required> I understand what I am doing
                            </label>
                        </div>
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

            </div>
            <!--            second row-->



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
    $title = $_POST['title'];
    $url = $_POST['url'];




    $conn->query("update hmap set title = '$title', url='$url' where id = '1' ")or die(mysql_error());


    ?>
    <script>
        window.location = "update_map.php";
    </script>
    <?php

}
?>

