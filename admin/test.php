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
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Demographic Data</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                <thead>
                                <tr>
                                    <th><span class="badge bg-light-blue"></span></th>
                                    <th><span class="badge bg-light-blue"></span></th>
                                    <th><span class="badge bg-red">MAKINA</span></th>
                                    <th><span class="badge bg-green">SARANG'OMBE</span></th>
                                    <th><span class="badge bg-purple">LINDI</span></th>
                                    <th><span class="badge bg-yellow">LAINI SABA</span></th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                <tr>

                                    <?php
                                    $query = $conn->query("select * from demo_data where head='area'");
                                    while ($row = $query->fetch()) {

                                        ?>
                                        <th>AREA. (Km<sup>2</sup>)</th>
                                        <td></td>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                        <td width="30"><a href="#areademo" data-toggle="modal"  class="btn btn-sm btn-success">Edit</a></td>
                                    <?php } ?>

                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='population'");
                                    while ($row = $query->fetch()) {

                                        ?>

                                        <th>POPULATION SIZE.</th>
                                        <td></td>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                        <td width="30"><a href="#popdemo" data-toggle="modal"  class="btn btn-sm btn-success">Edit</a></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='density'");
                                    while ($row = $query->fetch()) {

                                        ?>

                                        <th>POPULATION DENSITY.</th>
                                        <td></td>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                        <td width="30"><a href="#dendemo" data-toggle="modal" data-target="#adendemo" class="btn btn-sm btn-success">Edit</a></td>
                                    <?php } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='male'");
                                    while ($row = $query->fetch()) {

                                        ?>

                                        <th rowspan="2" >GENDER:</th>
                                        <th><span class="badge bg-red">Male</span></th>

                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                        <td width="30"><a href="#maledemo" data-toggle="modal" data-target="#maledemo" class="btn btn-sm btn-success">Edit</a></td>

                                    <?php } ?>
                                </tr>
                                <tr>
                                    <?php
                                    $query = $conn->query("select * from demo_data where head='female'");
                                    while ($row = $query->fetch()) {

                                        ?>

                                        <th><span class="badge bg-green">Female</span></th>
                                        <td><?php echo $row['makina']; ?></td>
                                        <td><?php echo $row['sara']; ?></td>
                                        <td><?php echo $row['lindi']; ?></td>
                                        <td><?php echo $row['laini']; ?></td>
                                        <td width="30"><a href="#femaledemo" data-toggle="modal" data-target="#femaledemo" class="btn btn-sm btn-success">Edit</a></td>

                                    <?php } ?>
                                </tr>


                                </tbody>
                            </table>

                        </div>


                    </div>

                </div>


                <!-- /.col -->
            </div>

            <div class="row">
                <div class="col-sm-6 ">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Demographic Graph</h3>

                            <p>To edit Area Demographic Graph</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-information"></i>
                        </div>
                        <a href="#pdMakina" data-toggle="modal" data-target="#pdMakina" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- small box -->
                <div class="col-sm-6 ">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>Population Density</h3>

                            <p>To edit Population Density</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-information"></i>
                        </div>
                        <a href="#pdMakina" data-toggle="modal" data-target="#pdMakina" class="small-box-footer">Click me <i class="fa fa-arrow-circle-right"></i></a>

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





    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<?php include('footer.php'); ?>

<!-- Control Sidebar -->

<div class="control-sidebar-bg"></div>


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
