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
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3> Women Profiles</h3>

                            <p>To edit Ward leader & Women Profiles</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-camera"></i>
                        </div>
                        <a href="lichamp.php"  class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3>Ward Briefing</h3>

                            <p>To edit Ward Briefing</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-information"></i>
                        </div>
                        <a href="librief.php" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red-gradient">
                        <div class="inner">
                            <h3>Voice Centre info</h3>

                            <p>To Edit Voice Centre info</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-load-a"></i>
                        </div>
                        <a href="update_magallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

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



</body>
</html>


