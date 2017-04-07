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
                        <h3 class="box-title">Edit Organisations</h3>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua"><i class="fa fa-female"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#">To Edit Community Based Orgs</a></span>
                                <span class="info-box-number"> <a data-toggle="modal" href="#cbo">click me</a></span>
                            </div>

                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="info-box">
                            <span class="info-box-icon bg-red"><i class="fa fa-group"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#">To Edit N.G.O</a></span>
                                <span class="info-box-number"> <a data-toggle="modal" href="#ngo">click me</a></span>
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
                            <span class="info-box-icon bg-green"><i class="fa fa-tree"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text"> <a href="#">To Edit Environmental Based Orgs</a></span>
                                <span class="info-box-number"> <a data-toggle="modal" href="#env">click me</a></span>
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
                            <h3>Women Champions</h3>

                            <p>To edit women champions</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-camera"></i>
                        </div>
                        <a href="makina_champs.php"  class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
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
                        <a href="#pdMakina" data-toggle="modal" data-target="#pdMakina" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

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
                        <a href="update_magallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
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
                        <h3 class="box-title">Projects</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="box-header with-border">
                            <h3 class="box-title">Complete Projects</h3>
                        </div>
                        <div class="col-lg-12 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>County Projects</h3>

                                    <p>To edit County Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-grid"></i>
                                </div>
                                <a href="mccp.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-12 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>N.G.O Projects</h3>

                                    <p>To edit N.G.O Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-grid"></i>
                                </div>
                                <a href="mcnp.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-12 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red-gradient">
                                <div class="inner">
                                    <h3>C.B.O Projects</h3>

                                    <p>To edit C.B.O Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-grid"></i>
                                </div>
                                <a href="mcbp.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box-header with-border">
                            <h3 class="box-title">Current Projects</h3>
                        </div>
                        <div class="col-lg-12 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>County Projects</h3>

                                    <p>To edit County Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-grid"></i>
                                </div>
                                <a href="ccp.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-12 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>N.G.O Projects</h3>

                                    <p>To edit N.G.O Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-grid"></i>
                                </div>
                                <a href="cnp.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-12 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red-gradient">
                                <div class="inner">
                                    <h3>C.B.O Projects</h3>

                                    <p>To edit C.B.O Projects</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-grid"></i>
                                </div>
                                <a href="cbp.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ./col -->
            </div>
            <!--third row-->
            <div class="row">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Planned Projects</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="small-box bg-blue-gradient">
                            <div class="inner">
                                <h3>Pie Chart</h3>

                                <p>To edit pie chart description</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-pie"></i>
                            </div>
                            <a href="update_hgallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 ">

                        <div class="info-box">
                            <span class="info-box-icon bg-purple"><i class="ion ion-stats-bars"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">To Edit Bar Graph description</span>
                                <a href="update_quote.php<?php echo '?id=1'; ?>" class="uppercase"><dt>Click me</dt></a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.description-block -->
                        <div class="info-box">
                            <span class="info-box-icon bg-green"><i class="ion ion-android-image"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">To Edit upcoming projects gallery</span>
                                <a href="update_quote.php<?php echo '?id=2'; ?>" class="uppercase"><dt>Click me</dt></a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.description-block -->
                        <div class="info-box">
                            <span class="info-box-icon bg-blue"><i class="ion ion-cash"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">To Edit Projects and Budget</span>
                                <a href="update_quote.php<?php echo '?id=3'; ?>" class="uppercase"><dt>Click me</dt></a>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.description-block -->


                    </div>



                </div>


                <!-- ./col -->
            </div>

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
<?php include('modals.php'); ?>
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
