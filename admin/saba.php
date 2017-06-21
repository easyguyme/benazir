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

                    <div class="box box-danger">
                        <div class="box-header with-border">

                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text"> <a href="#">To Edit Projects</a></span>
                                    <span class="info-box-number"> <a  href="lin_project.php">click me</a></span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-red"><i class="fa fa-calendar"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text"> <a href="#">To Edit Events and Activities</a></span>
                                    <span class="info-box-number"> <a  href="laevent.php">click me</a></span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix visible-sm-block"></div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-line-chart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text"> <a href="#">To Edit Plans and Budget</a></span>
                                    <span class="info-box-number"> <a data-toggle="modal" href="#">click me</a></span>
                                </div>

                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->


                    </div>

                    <!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3> Ward & Women Profiles</h3>

                                <p>To edit Ward & Women Profiles</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-camera"></i>
                            </div>
                            <a href="laprofile.php"  class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>Area Profile Table</h3>

                                <p>To edit Area Profile Table</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-information"></i>
                            </div>
                            <a href="#pdlaini" data-toggle="modal" data-target="#pdlaini" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red-gradient">
                            <div class="inner">
                                <h3>Gallery</h3>

                                <p>To upload pictures on the gallery</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-camera"></i>
                            </div>
                            <a href="lagallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <!---->
                    <!-- ./col -->
                </div>
                <!--            second row-->


                <!--            social media-->




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

    <style>
        .example-modal .modal {
            position: relative;
            top: auto;
            bottom: auto;
            right: auto;
            left: auto;
            display: block;
            z-index: 1;
        }

        .example-modal .modal {
            background: transparent !important;
        }
    </style>
    <div class="modal example-modal" id="pdlaini" role="dialog">
        <div class="modal modal-primary">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Update Laini saba Area Profile Table</h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        $query = $conn->query("select * from profile_tbl where page='saba'");
                        while ($row = $query->fetch()) {

                        ?>

                        <form method="post" action="sara.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="area" class="control-label">Area:</label>

                                    <div  input-sm">
                                    <input type="text" name="area" class="form-control" id="area" placeholder="Area" value="<?php echo $row['area']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="population" class=" control-label">Population:</label>

                                <div class=" input-sm">
                                    <input type="text" name="population" class="form-control" id="population" placeholder="Population" value="<?php echo $row['population']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="village" class=" control-label">Villages:</label>

                                <div class=" input-sm">
                                    <input type="text" name="village" class="form-control" id="village" placeholder="No. of Villages" value="<?php echo $row['village']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fund" class=" control-label">Fund:</label>

                                <div class=" input-sm">
                                    <input type="text" name="fund" class="form-control" id="fund" placeholder="Fund Amount" value="<?php echo $row['fund']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mca" class=" control-label">MCA:</label>

                                <div class=" input-sm">
                                    <input type="text" name="mca" class="form-control" id="mca" placeholder="Mca Name" value="<?php echo $row['mca']; ?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="admin" class=" control-label">Ward Admin:</label>

                                <div class=" input-sm">
                                    <input type="text" name="admin" class="form-control" id="admin" placeholder="Mca Name" value="<?php echo $row['admin']; ?>" required>
                                </div>
                            </div>
                    </div>


                    <?php }?>

                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-info" name="makdes"><i class="icon-save icon-large"></i> Save</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php
include('dbcon.php');

if (isset($_POST['makdes'])) {
    $area = $_POST['area'];
    $population = $_POST['population'];
    $village = $_POST['village'];
    $fund = $_POST['fund'];
    $mca = $_POST['mca'];
    $admin = $_POST['admin'];


    //$conn->query->prepare("update pdes set head = '$title' , des ='$info' where page ='makina' ") or die(mysql_error());
    $query="update profile_tbl set area = :area, population = :population , village = :village, fund =:fund , mca= :mca,admin=:admin where page ='saba' ";
    $stmt=$conn->prepare($query);
    $stmt->bindParam(':area', $_POST['area'], PDO::PARAM_STR);
    $stmt->bindParam(':population', $_POST['population'], PDO::PARAM_STR);
    $stmt->bindParam(':village', $_POST['village'], PDO::PARAM_STR);
    $stmt->bindParam(':fund', $_POST['fund'], PDO::PARAM_STR);
    $stmt->bindParam(':mca', $_POST['mca'], PDO::PARAM_STR);
    $stmt->bindParam(':admin', $_POST['admin'], PDO::PARAM_STR);
    $stmt->execute();


    ?>
    <script>
        window.location = "saba.php";
    </script>
    <?php

}
?>