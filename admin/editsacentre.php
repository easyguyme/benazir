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
                    <div class="col-md-2">


                    </div>
                    <div class="col-md-8">
                        <div class="box box-info">
                            <div class="box-header with-border">

                                <h3 class="box-title">Update Sarang'ombe Voice Centre Brief information</h3>

                            </div>
                            <!-- main header title -->


                            <!-- content -->
                            <form method="post" class="form-horizontal" enctype="multipart/form-data">

                                <div class="box-body">
                                    <?php
                                    $query = $conn->query("select * from ward where page='sara' AND id='$get_id'");
                                    while ($row = $query->fetch()) {

                                        ?>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Backgroung Info:</label>

                                            <div class="col-sm-6 ">
                                                <input type="text" name="info" class="form-control" id="desc" placeholder="Info" value="<?php echo $row['info']; ?>"  required>

                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Location:</label>

                                            <div class="col-sm-6 ">
                                                <input type="text" name="location" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['location']; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Funding Agency:</label>

                                            <div class="col-sm-4 ">
                                                <input type="text" name="funding" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['funding']; ?>"  required>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="type" class="col-sm-2 control-label">Map url:</label>

                                            <div class="col-sm-4 input-sm">
                                                <input type="text" name="map" class="form-control" id="desc" placeholder="Type of quote" value="<?php echo $row['map']; ?>"  disabled>
                                            </div>
                                        </div>





                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Objectives:</label>

                                            <div class="col-sm-10 ">
                                                <p class="help-block" style="color: red;">Enter Objectives separated by a comma.e.g cooking,travelling,reading (Max 4)</p>
                                                <textarea  name="obj" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['obj1']; ?>, <?php echo $row['obj2']; ?>, <?php echo $row['obj3']; ?>, <?php echo $row['obj4']; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Activities:</label>

                                            <div class="col-sm-10 ">
                                                <p class="help-block" style="color: red;">Enter Activities separated by a comma.e.g cooking,travelling,reading (Max 4)</p>
                                                <textarea  name="act" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['act1']; ?>, <?php echo $row['act2']; ?>, <?php echo $row['act3']; ?>, <?php echo $row['act4']; ?></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">

                                            <label for="name" class="col-sm-2 control-label">Achievements:</label>

                                            <div class="col-sm-10 ">
                                                <p class="help-block" style="color: red;">Enter Achievements separated by a comma.e.g cooking,travelling,reading (Max 4)</p>
                                                <textarea  name="ach" style="width: 40pc; height: 5pc; placeholder="Description" required><?php echo $row['ach1']; ?>, <?php echo $row['ach2']; ?>, <?php echo $row['ach3']; ?>, <?php echo $row['ach4']; ?></textarea>

                                            </div>
                                        </div>




                                    <?php }?>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">

                                    <button name="save" class="btn btn-info">Save changes</button>

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
if (isset($_POST['save'])){

    $info = $_POST['info'];
    $location = $_POST['location'];
    $funding = $_POST['funding'];
    $obj =$_POST['obj'];
    list($skill1,$skill2,$skill3,$skill4)=explode(",",$obj);
    $act =$_POST['act'];
    list($hobby1,$hobby2,$hobby3,$hobby4)=explode(",",$act);
    $ach =$_POST['ach'];
    list($tobby1,$tobby2,$tobby3,$tobby4)=explode(",",$ach);




    $conn->query("update ward  set info='$info',location='$location', funding='$funding',obj1='$skill1', obj2='$skill2', obj3='$skill3',obj4='$skill4',act1='$hobby1',act2='$hobby2',act3='$hobby3',act4='$hobby4',ach1='$tobby1',ach2='$tobby2',ach3='$tobby3',ach4='$tobby4' where id ='$get_id' ") or die(mysqli_error());





    ?>
    <script>
        window.location = "sacentre.php";
    </script>
    <?php

}
?>