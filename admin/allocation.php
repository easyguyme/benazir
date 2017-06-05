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
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='water'");
                                                            while ($row = $query->fetch()) {
                                                            $id=$row['head'];
                                                                ?>

                                                                <th>1.</th>
                                                                <th>Water</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='health'");
                                                            while ($row = $query->fetch()) {
                                                                $id2=$row['head'];
                                                                ?>

                                                                <th>2.</th>
                                                                <th>Health</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id2; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='edu'");
                                                            while ($row = $query->fetch()) {
                                                                $id=$row['head'];
                                                                ?>

                                                                <th>3.</th>
                                                                <th>Education</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='san'");
                                                            while ($row = $query->fetch()) {
                                                                $id=$row['head'];
                                                                ?>

                                                                <th>4.</th>
                                                                <th>Sanitation</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='solid'");
                                                            while ($row = $query->fetch()) {
                                                                $id=$row['head'];
                                                                ?>

                                                                <th>5.</th>
                                                                <th>Solid Waste</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='drain'");
                                                            while ($row = $query->fetch()) {
                                                                $id=$row['head'];
                                                                ?>

                                                                <th>6.</th>
                                                                <th>Drainage</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='energy'");
                                                            while ($row = $query->fetch()) {
                                                                $id=$row['head'];
                                                                ?>

                                                                <th>7.</th>
                                                                <th>Energy</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
                                                            <?php } ?>
                                                        </tr>
                                                        <tr>
                                                            <?php
                                                            $query = $conn->query("select * from budget_makina where head='road'");
                                                            while ($row = $query->fetch()) {
                                                                $id=$row['head'];
                                                                ?>

                                                                <th>8.</th>
                                                                <th>Roads</th>
                                                                <td><?php echo $row['cost']; ?></td>
                                                                <td><?php echo $row['allocated']; ?></td>
                                                                <td><?php echo $row['used']; ?></td>
                                                                <td><?php echo $row['variance']; ?></td>
                                                                <td width="30"><a href="editmakbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                            <th></th>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsarbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                            <th></th>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editlinbudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                            <th></th>

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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
                                                                <td width="30"><a href="editsababudget.php?<?php echo 'head='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>
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
