<?PHP include("login_class.php");?>
<?PHP include("session.php");?>
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
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>LOGO</h3>

                            <p>To change the pic on the home page</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-camera"></i>
                        </div>
                        <a href="#myModal" data-toggle="modal" data-target="#myModal" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Project Description</h3>

                            <p>To edit Project Description</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-information"></i>
                        </div>
                        <a href="#pdmyModal" data-toggle="modal" data-target="#pdModal" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Upcoming events</h3>

                            <p>To edit Upcoming events</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-calendar"></i>
                        </div>
                        <a href="addevent.php" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
<!---->
                <!-- ./col -->
            </div>
<!--            second row-->
            <div class="row">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Map</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="small-box bg-green-active">
                            <div class="inner">
                                <h3>Map</h3>

                                <p>To change the map on the home page (be sure you know what you are doing)</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-map"></i>
                            </div>
                            <a href="update_map.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 ">

                            <div class="info-box">
                                <span class="info-box-icon bg-purple"><i class="ion ion-location"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sarang'ombe Voice centre</span>
                                    <a href="update_location.php<?php echo '?id=1'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-location"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Makina Voice centre</span>
                                    <a href="update_location.php<?php echo '?id=2'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="ion ion-location"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Laini Saba Voice centre</span>
                                    <a href="update_location.php<?php echo '?id=3'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="ion ion-location"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Lindi Voice centre</span>
                                <a href="update_location.php<?php echo '?id=4'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.description-block -->

                    </div>

                </div>


                <!-- ./col -->
            </div>
<!--third row-->
            <div class="row">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Quotes and Gallery</h3>
                    </div>

                    <div class="col-md-6 ">

                        <div class="info-box">
                            <span class="info-box-icon bg-purple"><i class="ion ion-android-hangout"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Daily Quotes</span>
                                <a href="update_quote.php" class="uppercase"><dt>Click to edit details</dt></a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.description-block -->

                        <!-- /.description-block -->
                       

                    </div>

                    <div class="col-md-6">
                        <div class="small-box bg-red-gradient">
                            <div class="inner">
                                <h3>Gallery</h3>

                                <p>To upload pictures on the gallery</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-camera"></i>
                            </div>
                            <a href="update_hgallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>


                <!-- ./col -->
            </div>
            
<!--            social media-->

            <div class="row">

                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit social media links</h3>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#facebook">Facebook</a></span>
                                <span class="info-box-number"> <a data-toggle="modal" href="#facebook">Edit</a></span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-teal"><i class="fa fa-twitter"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#twitter">Twitter</a></span>
                                <span class="info-box-number"> <a data-toggle="modal" href="#twitter">Edit</a></span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->

                    <!-- fix for small devices only -->
                    <div class="clearfix visible-sm-block"></div>

                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg"><i class="fa fa-instagram"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text"> <a href="#instagram">Instagram</a></span>
                                    <span class="info-box-number"> <a data-toggle="modal" href="#instagram">Edit</a></span>
                                </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red-active"><i class="fa fa-youtube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text"> <a href="#youtube">Youtube</a></span>
                                    <span class="info-box-number"> <a data-toggle="modal" href="#youtube">Edit</a></span>

                                </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                </div>

                <!-- /.col -->
            </div>


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
<?php include('modal_delete.php'); ?>

<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>
<?php include('logo_modal.php'); ?>
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
