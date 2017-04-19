<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('sidebar.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Women Voices, ICT Choices |
                WARDS | Budget Allocation
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="../makina.php"><i class="fa  fa-sticky-note"></i> Area stats</a></li>
                <li class="active">Budget Allocation</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Budget Allocation</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Custom Tabs -->
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#makina" data-toggle="tab">MAKINA</a></li>
                                            <li><a href="#sara" data-toggle="tab">SARANG'OMBE</a></li>
                                            <li><a href="#lindi" data-toggle="tab">LINDI</a></li>
                                            <li><a href="#saba" data-toggle="tab">LAINI SABA</a></li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="makina">

                                                <!-- /.box-header -->
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                                        <thead>
                                                        <tr>
                                                            <th><span class="badge bg-blue">No.</span></th>
                                                            <th><span class="badge bg-light-blue">Project</span></th>
                                                            <th><span class="badge bg-red">Estimated Cost</span></th>
                                                            <th><span class="badge bg-green">Amount Allocated</span></th>
                                                            <th><span class="badge bg-purple">Amount Used</span></th>
                                                            <th><span class="badge bg-yellow">Budget Variance</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='water'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>1.</th>
                                                                <th>Water</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='health'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>2.</th>
                                                                <th>Health</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='edu'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>3.</th>
                                                                <th>Education</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='san'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>4.</th>
                                                                <th>Sanitation</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='solid'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>5.</th>
                                                                <th>Solid Waste</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='drain'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>6.</th>
                                                                <th>Drainage</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='energy'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>7.</th>
                                                                <th>Energy</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='road'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>8.</th>
                                                                <th>Roads</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->

                                                <!-- /.box-body -->

                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="sara">

                                                <!-- /.box-header -->
                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                                        <thead>
                                                        <tr>
                                                            <th><span class="badge bg-blue">No.</span></th>
                                                            <th><span class="badge bg-light-blue">Project</span></th>
                                                            <th><span class="badge bg-red">Estimated Cost</span></th>
                                                            <th><span class="badge bg-green">Amount Allocated</span></th>
                                                            <th><span class="badge bg-purple">Amount Used</span></th>
                                                            <th><span class="badge bg-yellow">Budget Variance</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='water'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>1.</th>
                                                                <th>Water</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='health'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>2.</th>
                                                                <th>Health</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='edu'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>3.</th>
                                                                <th>Education</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='san'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>4.</th>
                                                                <th>Sanitation</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='solid'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>5.</th>
                                                                <th>Solid Waste</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='drain'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>6.</th>
                                                                <th>Drainage</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='energy'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>7.</th>
                                                                <th>Energy</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_sara where head='road'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>8.</th>
                                                                <th>Roads</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->

                                                <!-- /.box-footer -->
                                            </div>

                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="lindi">

                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                                        <thead>
                                                        <tr>
                                                            <th><span class="badge bg-blue">No.</span></th>
                                                            <th><span class="badge bg-light-blue">Project</span></th>
                                                            <th><span class="badge bg-red">Estimated Cost</span></th>
                                                            <th><span class="badge bg-green">Amount Allocated</span></th>
                                                            <th><span class="badge bg-purple">Amount Used</span></th>
                                                            <th><span class="badge bg-yellow">Budget Variance</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='water'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>1.</th>
                                                                <th>Water</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='health'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>2.</th>
                                                                <th>Health</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='edu'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>3.</th>
                                                                <th>Education</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='san'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>4.</th>
                                                                <th>Sanitation</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='solid'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>5.</th>
                                                                <th>Solid Waste</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='drain'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>6.</th>
                                                                <th>Drainage</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='energy'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>7.</th>
                                                                <th>Energy</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_lindi where head='road'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>8.</th>
                                                                <th>Roads</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->



                                                <!-- /.box-body -->

                                            </div>
                                            <div class="tab-pane" id="saba">

                                                <div class="box-body table-responsive">

                                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                                        <thead>
                                                        <tr>
                                                            <th><span class="badge bg-blue">No.</span></th>
                                                            <th><span class="badge bg-light-blue">Project</span></th>
                                                            <th><span class="badge bg-red">Estimated Cost</span></th>
                                                            <th><span class="badge bg-green">Amount Allocated</span></th>
                                                            <th><span class="badge bg-purple">Amount Used</span></th>
                                                            <th><span class="badge bg-yellow">Budget Variance</span></th>

                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='water'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>1.</th>
                                                                <th>Water</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='health'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>2.</th>
                                                                <th>Health</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='edu'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>3.</th>
                                                                <th>Education</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='san'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>4.</th>
                                                                <th>Sanitation</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='solid'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>5.</th>
                                                                <th>Solid Waste</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='drain'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>6.</th>
                                                                <th>Drainage</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='energy'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>7.</th>
                                                                <th>Energy</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_saba where head='road'");
                                                            while ($row = $query->fetch()) {

                                                                ?>

                                                                <th>8.</th>
                                                                <th>Roads</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                            <?php } ?>
                                                        </tr>



                                                        </tbody>
                                                    </table>

                                                </div>
                                                <!-- /.box-body -->



                                                <!-- /.box-body -->

                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- nav-tabs-custom -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                </div>



                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Top row -->
            <div class="row">
                <div class="col-md-10">
                    <!-- AREA CHART -->
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Resources Distribution</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Custom Tabs -->
                                    <div class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#makinas" data-toggle="tab">MAKINA</a></li>
                                            <li><a href="#saras" data-toggle="tab">SARANG'OMBE</a></li>
                                            <li><a href="#lindis" data-toggle="tab">LINDI</a></li>
                                            <li><a href="#sabas" data-toggle="tab">LAINI SABA</a></li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="makinas">

                                                <!-- /.box-header -->


                                                <canvas id="piemakina" style="height:300px"></canvas>

                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="saras">

                                                <canvas id="piesara" style="height:300px"></canvas>
                                            </div>

                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="lindis">

                                                <canvas id="pielindi" style="height:300px"></canvas>
                                            </div>
                                            <div class="tab-pane" id="sabas">

                                                <canvas id="piesaba" style="height:300px"></canvas>


                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- nav-tabs-custom -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>

                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- DONUT CHART -->


                </div>
                <!-- /.col (LEFT) -->
                <div class="col-md-2">

                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Key</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <ul class="chart-legend clearfix">
                            <li><i class="fa fa-circle-o text-aqua"></i> Water</li>
                            <li><i class="fa fa-circle-o text-red"></i>Health</li>
                            <li><i class="fa fa-circle-o text-yellow"></i> Education</li>
                            <li><i class="fa fa-circle-o text-green"></i> Sanitation</li>
                            <li><i class="fa fa-circle-o text-purple"></i> Solid Waste</li>
                            <li><i class="fa fa-circle-o text-gray"></i> Drainage</li>
                                <li><i class="fa fa-circle-o text-orange"></i> Energy</li>
                                <li><i class="fa fa-circle-o text-blue"></i> Roads</li>
                            </ul>
                            <!-- Info Boxes Style 2 -->

                            
                            <!-- /.info-box -->

                            <!-- /.row -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                    <!-- /.box -->

                    <!-- PRODUCT LIST -->

                    <!-- /.box -->
                </div>
                <!-- /.col (RIGHT) -->
            </div>
            <!-- /.row -->

            <!-- Second row -->


            <div class="row">

                <!-- /.col -->
            </div>

            <div class="row">
                <?php include('partners.php'); ?>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('footer.php'); ?>
    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="../plugins/chartjs/Chart.min.js"></script>
<script src="../plugins/chartjs/Chart.bundle.js"></script>
<script src="../plugins/chartjs/utils.js"></script>



<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->

<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": false,
            "lengthChange": true,
            "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
            "searching": false,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });
    });
</script>

<script>

    window.onload = function () {
        <!--load left pie chart -->
        var ct = document.getElementById("piemakina").getContext("2d");
        window.myPieR = new Chart(ct, configs);
        <!--load left pie chart -->
        var cts = document.getElementById("piesara").getContext("2d");
        window.myPieR = new Chart(cts, configa);
        <!--load left pie chart -->
        var ctd = document.getElementById("pielindi").getContext("2d");
        window.myPieR = new Chart(ctd, configb);
        <!--load left pie chart -->
        var ctf = document.getElementById("piesaba").getContext("2d");
        window.myPieR = new Chart(ctf, configc);
    };


</script>
<!-- page script -->
<script>


    var configs = {
        <?php
        $query = $conn->query("select * from resource where page='makina'");
        while ($row = $query->fetch()) {

        ?>
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php echo $row['water']; ?>, <?php echo $row['health']; ?>,<?php echo $row['edu']; ?>, <?php echo $row['san']; ?>,<?php echo $row['waste']; ?>, <?php echo $row['drain']; ?>, <?php echo $row['energy']; ?>, <?php echo $row['road']; ?>],
                <?php } ?>
                backgroundColor: [
                    window.chartColors.aqua,
                    window.chartColors.red,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.purple,
                    window.chartColors.grey,
                    window.chartColors.orange,
                    window.chartColors.blue

                ],
                label: 'Dataset'
            }],
            labels: [
                "Water",
                "Health",
                "Education",
                "Sanitation",
                "Solid Waste",
                "Drainage",
                "Energy",
                "Roads"


            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Project Based Resources Distribution'
            }
        }
    };
    var configa = {
        <?php
        $query = $conn->query("select * from resource where page='sara'");
        while ($row = $query->fetch()) {

        ?>
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php echo $row['water']; ?>, <?php echo $row['health']; ?>,<?php echo $row['edu']; ?>, <?php echo $row['san']; ?>,<?php echo $row['waste']; ?>, <?php echo $row['drain']; ?>, <?php echo $row['energy']; ?>, <?php echo $row['road']; ?>],
                <?php } ?>
                backgroundColor: [
                    window.chartColors.aqua,
                    window.chartColors.red,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.purple,
                    window.chartColors.grey,
                    window.chartColors.orange,
                    window.chartColors.blue

                ],
                label: 'Dataset'
            }],
            labels: [
                "Water",
                "Health",
                "Education",
                "Sanitation",
                "Solid Waste",
                "Drainage",
                "Energy",
                "Roads"


            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Project Based Resources Distribution'
            }
        }
    };
    var configb = {
        <?php
        $query = $conn->query("select * from resource where page='lindi'");
        while ($row = $query->fetch()) {

        ?>
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php echo $row['water']; ?>, <?php echo $row['health']; ?>,<?php echo $row['edu']; ?>, <?php echo $row['san']; ?>,<?php echo $row['waste']; ?>, <?php echo $row['drain']; ?>, <?php echo $row['energy']; ?>, <?php echo $row['road']; ?>],
                <?php } ?>
                backgroundColor: [
                    window.chartColors.aqua,
                    window.chartColors.red,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.purple,
                    window.chartColors.grey,
                    window.chartColors.orange,
                    window.chartColors.blue

                ],
                label: 'Dataset'
            }],
            labels: [
                "Water",
                "Health",
                "Education",
                "Sanitation",
                "Solid Waste",
                "Drainage",
                "Energy",
                "Roads"


            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Project Based Resources Distribution'
            }
        }
    };
    var configc = {
        <?php
        $query = $conn->query("select * from resource where page='laini'");
        while ($row = $query->fetch()) {

        ?>
        type: 'pie',
        data: {
            datasets: [{
                data: [<?php echo $row['water']; ?>, <?php echo $row['health']; ?>,<?php echo $row['edu']; ?>, <?php echo $row['san']; ?>,<?php echo $row['waste']; ?>, <?php echo $row['drain']; ?>, <?php echo $row['energy']; ?>, <?php echo $row['road']; ?>],
                <?php } ?>
                backgroundColor: [
                    window.chartColors.aqua,
                    window.chartColors.red,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.purple,
                    window.chartColors.grey,
                    window.chartColors.orange,
                    window.chartColors.blue

                ],
                label: 'Dataset'
            }],
            labels: [
                "Water",
                "Health",
                "Education",
                "Sanitation",
                "Solid Waste",
                "Drainage",
                "Energy",
                "Roads"


            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Project Based Resources Distribution'
            }
        }
    };


    var colorNames = Object.keys(window.chartColors);


</script>
<script src="../scroller/js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_options = {
            $AutoPlay: true,
            $Idle: 0,
            $AutoPlaySteps: 4,
            $SlideDuration: 2500,
            $SlideEasing: $Jease$.$Linear,
            $PauseOnHover: 4,
            $SlideWidth: 140,
            $Cols: 7
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*responsive code begin*/
        /*you can remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 809);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*responsive code end*/
    };
</script>
<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>
