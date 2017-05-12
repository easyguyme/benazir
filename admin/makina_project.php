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
                <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3> Social Audit</h3>

                            <p>To edit Social Audit table</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-chart"></i>
                        </div>
                        <a href="mak_soc.php"  class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <!-- ./col -->
                <div class="col-lg-6 col-xs-6">
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


                </div>


                <!-- ./col -->
            </div>
            <!--third row-->


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
