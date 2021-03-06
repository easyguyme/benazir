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

                <div class="col-md-6 ">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Development Projects</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="fa fa-cubes"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Makina Development Projects</span>
                                    <a href="makdev.php" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <div class="info-box">
                                <span class="info-box-icon bg-purple"><i class="fa fa-cubes"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sarang'ombe Development Projects</span>
                                    <a href="sardev.php" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->

                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="fa fa-cubes"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Laini Development Projects</span>
                                    <a href="lainidev.php" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Lindi Development Projects</span>
                                    <a href="lindev.php" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->

                        </div>


                    </div>


                </div>

                <div class="col-sm-6 ">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Resources Distribution</h3>

                            <p>To edit Resources Distribution</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-information"></i>
                        </div>
                        <a href="graphres.php"  class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- /.col -->

    </div>
            <div class="row">
                <div class="col-md-4 ">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">CBO Project status</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="info-box">
                                <span class="info-box-icon bg-purple"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sarang'ombe Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=sara&body=cbo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Makina Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=makina&body=cbo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Laini Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=laini&body=cbo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Lindi Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=lindi&body=cbo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->

                        </div>


                    </div>


                </div>
                <!-- small box -->

                <div class="col-md-4 ">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">NGO Project status</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="info-box">
                                <span class="info-box-icon bg-purple"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sarang'ombe Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=sara&body=ngo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Makina Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=makina&body=ngo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Laini Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=laini&body=ngo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Lindi Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=lindi&body=ngo'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->

                        </div>


                    </div>


                </div>

                <div class="col-md-4 ">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"> County Project status</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body">
                            <div class="info-box">
                                <span class="info-box-icon bg-purple"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Sarang'ombe Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=sara&body=county'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-green"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Makina Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=makina&body=county'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-blue"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Laini Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=laini&body=county'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->
                            <div class="info-box">
                                <span class="info-box-icon bg-aqua"><i class="ion ion-cube"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Lindi Project status</span>
                                    <a href="editprojstat.php<?php echo '?page=lindi&body=county'; ?>" class="uppercase"><dt>Click to edit details</dt></a>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.description-block -->

                        </div>


                    </div>


                </div>
            </div>
            <!-- ./col -->

            <!-- ./col -->

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
