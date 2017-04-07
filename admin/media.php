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

            <!--            second row-->
            <div class="row">

                    <div class="col-md-6">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>Gallery</h3>

                                <p>To change the Gallery picture on the media page</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-camera"></i>
                            </div>
                            <a href="media_gallery.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="small-box bg-green-active">
                            <div class="inner">
                                <h3>Publications</h3>

                                <p>To update or add publications on the media page</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-printer"></i>
                            </div>
                            <a href="addpub.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
     <!-- ./col -->
            </div>
            <!--third row-->
            <div   class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Testimonials</h3>

                            <p>To update or add testimonials</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-speakerphone"></i>
                        </div>
                        <a href="addtestimony.php" class="small-box-footer">click me <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-2"></div>



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
