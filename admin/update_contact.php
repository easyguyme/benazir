<?php  include('session.php'); ?>
<?php include('header.php'); ?>
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
                <div class="col-md-7">
                    <?php
                    $query = $conn->query("select * from contact where id='1'");
                    while ($row = $query->fetch()) {

                        ?>

                        <iframe src="<?php echo $row['url']; ?>" width="1200" height="350" frameborder="0" style="border:0"
                                allowfullscreen></iframe>
                        <?php
                    }

                    ?>
                </div>
                <div class="col-md-5">

                    <div class="box box-info">
                        <div class="box-header with-border">
                            <?php
                            $query = $conn->query("select * from contact where id='1'");
                            while ($row = $query->fetch()) {

                            ?>
                            <h3 class="box-title">Update Map Url</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" class="form-horizontal">

                            <div class="box-body">

                                <div class="form-group">
                                    <label for="url" class="col-sm-2 control-label">Url:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="url" name="url" class="form-control" id="email" placeholder="url" value="<?php echo $row['url']; ?>" required>
                                    </div>
                                </div>

                                <?php } ?>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="update" class="btn btn-success">Update</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                        <?php
                        include('dbcon.php');
                        if (isset($_POST['update'])){
                            $url = $_POST['url'];



                            $conn->query("update contact set url = '$url' where id = '1' ")or die(mysql_error());


                            ?>
                            <script>
                                window.location = "update_contact.php";
                            </script>
                            <?php

                        }
                        ?>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-2">


                </div>
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <?php
                            $query = $conn->query("select * from contact where id='1'");
                            while ($row = $query->fetch()) {

                            ?>
                            <h3 class="box-title">Update Contacts</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" class="form-horizontal">

                            <div class="box-body">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">Postal Address:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="pob" class="form-control" id="name" placeholder="POB" value="<?php echo $row['pob']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="linfo" class="col-sm-2 control-label">Location:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="loc" class="form-control" id="linfo" placeholder="Location" value="<?php echo $row['loc']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url" class="col-sm-2 control-label">Phone:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="<?php echo $row['phone']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url" class="col-sm-2 control-label">Email:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="email" value="<?php echo $row['mail']; ?>" required>
                                    </div>
                                </div>

                                <?php } ?>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="save" class="btn btn-warning">Update</button>
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

if (isset($_POST['save'])){
    $pob = $_POST['pob'];
    $loc = $_POST['loc'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];




    $conn->query("update contact set pob = '$pob', loc='$loc', phone ='$phone', mail='$email' where id = '1' ")or die(mysql_error());

    ?>
    <script>
        window.location = "update_contact.php";
    </script>
    <?php

}
?>