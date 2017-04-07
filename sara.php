<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
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
                SARANGO'MBE Ward
                <small>Version 1.0</small>
                <ol class="breadcrumb" style="font-size:small;color: #b21628;">
                    <li><a href="#profile"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#projects"><i class="fa fa-battery-4"></i>Projects</a></li>
                    <li><a href="#pprojects"><i class="fa fa-battery-1"></i>Planned Projects</a></li>

                </ol>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Sarang'ombe Ward</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Top Info boxes -->
            <div class="row">
                <?php
                $query = $conn->query("select * from ptop where page='sara'");
                while ($row = $query->fetch()) {
                $id = $row['id'];
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-female"></i></span>

                        <div class="info-box-content">

                            <span class="info-box-number"><?php echo $row['lh']; ?><small></small></span>
                            <span class="info-box-number"><?php echo $row['ln']; ?></span>
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

                            <span class="info-box-number"><?php echo $row['mh']; ?><small></small></span>
                            <span class="info-box-number"><?php echo $row['mn']; ?></span>
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

                            <span class="info-box-number"><?php echo $row['rh']; ?><small></small></span>
                            <span class="info-box-number"><?php echo $row['rn']; ?></span>
                        </div>
                        <?php } ?>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- Top row -->
            <div class="row">
                <div class="col-md-4" id="profile" >
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Women Champions</dt></h3>

                            <div class="box-tools pull-right">
                                <?php

                                $query = $conn->query("select * from profiles where page='sara'") or die(mysql_error());
                                $count = $query->rowcount();


                                ?>

                                <span class="label label-danger"><?php  echo $count;  ?> Champions</span>
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">

                                <?php

                                $query = $conn->query("select * from profiles where page='sara'") or die(mysql_error());
                                while ($row = $query->fetch()) {


                                    ?>
                                    <li>
                                        <img src="sara/champs/<?php echo $row['image']; ?>" alt="User Image">
                                        <a class="users-list-name" href="#"><?php echo $row['name']; ?></a>
                                        <span class="users-list-date"><?php echo $row['age']; ?></span>
                                    </li>
                                <?php }?>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="profile/sara.php" class="uppercase">View All Champions</a>
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                    <div class="box box-warning direct-chat-warning">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Activity Brief</dt></h3>

                            <div class="box-tools pull-right">

                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                                <?php
                                $query = $conn->query("select * from pdes where page='sara'");
                                while ($row = $query->fetch()) {

                                ?>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- Conversations are loaded here -->
                            <div class="box-body text-left">
                                <dl>
                                    <dt><?php echo $row['head']; ?></dt>
                                    <dd> <?php echo $row['des']; ?></dd>


                                </dl>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="profile/sara.php" class="uppercase">Read More</a>
                        </div>
                        <!-- /.box-footer-->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-4">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Photo Gallery</dt></h3>
                            <div class="box-tools pull-right">

                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>



                            </div>
                        </div>

                        <!-- /.box-header -->
                        <div class="box box-solid">

                            <!-- /.box-header -->
                            <style>


                                .carousel-inner>.item>img, .carousel-inner>.item>a>img
                                {
                                    height:300px;
                                    width:700px;
                                }

                            </style>
                            <?php




                            $query = $conn->query("select * from sagallery") or die(mysql_error());
                            $count = $query->rowcount();
                            $slides='';
                            $Indicators='';
                            $counter=0;

                            while ($row = $query->fetch())
                            {

                                $title = $row['title'];
                                $desc = $row['desc'];
                                $image = $row['image'];
                                if($counter == 0)
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                                    $slides .= '<div class="item active">
            <img src="sara/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

                                }
                                else
                                {
                                    $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                    $slides .= '<div class="item">
            <img src="sara/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
                                }
                                $counter++;
                            }

                            ?>
                            <div class="box-body">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php echo $Indicators; ?>
                                    </ol>
                                    <div class="carousel-inner">
                                        <?php echo $slides; ?>
                                    </div>

                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <span class="fa fa-angle-right"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <a href="profile/sara.php" class="uppercase">View More</a>
                        </div>
                    </div>
                    <!-- /.box -->

                </div>

            </div>
            <!-- /.row -->
            <h2 class="page-header text-center" id="projects"><dt>PROJECTS</dt></h2>
            <!-- Second row -->
            <div class="row" >
                <!-- Left col -->
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Completed Projects</dt></h3>

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
                                            <li class="active"><a href="#county" data-toggle="tab">County Government Projects</a></li>
                                            <li><a href="#ngo" data-toggle="tab">N.G.O Projects</a></li>
                                            <li><a href="#cbo" data-toggle="tab">C.B.O Projects</a></li>


                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="county">

                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="table-responsive">
                                                        <table class="table no-margin">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Start date</th>
                                                                <th>End date</th>
                                                                <th>Status</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $query = $conn->query("select * from sara_cproject where org='county'");
                                                            while ($row = $query->fetch()) {
                                                                $id = $row['id'];
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row['name']; ?></td>
                                                                    <td><?php echo $row['sdate']; ?></td>
                                                                    <td><?php echo $row['edate']; ?></td>
                                                                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer clearfix">

                                                    <a href="#" class="btn btn-sm btn-success  center-block">View All complete Projects</a>
                                                </div>
                                                <!-- /.box-body -->

                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="ngo">

                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <div class="table-responsive">
                                                        <table class="table no-margin">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Start date</th>
                                                                <th>End date</th>
                                                                <th>Status</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $query = $conn->query("select * from sara_cproject where org='ngo'");
                                                            while ($row = $query->fetch()) {
                                                                $id = $row['id'];
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row['name']; ?></td>
                                                                    <td><?php echo $row['sdate']; ?></td>
                                                                    <td><?php echo $row['edate']; ?></td>
                                                                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer clearfix">

                                                    <a href="#" class="btn btn-sm btn-success  center-block">View All complete Projects</a>
                                                </div>
                                                <!-- /.box-footer -->
                                            </div>

                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="cbo">

                                                <div class="box-body">
                                                    <div class="table-responsive">
                                                        <table class="table no-margin">
                                                            <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Start date</th>
                                                                <th>End date</th>
                                                                <th>Status</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $query = $conn->query("select * from sara_cproject where org='cbo'");
                                                            while ($row = $query->fetch()) {
                                                                $id = $row['id'];
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row['name']; ?></td>
                                                                    <td><?php echo $row['sdate']; ?></td>
                                                                    <td><?php echo $row['edate']; ?></td>
                                                                    <td><span class="label label-success"><?php echo $row['status']; ?></span></td>

                                                                </tr>
                                                            <?php } ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- /.table-responsive -->
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer clearfix">

                                                    <a href="#" class="btn btn-sm btn-success  center-block">View All complete Projects</a>
                                                </div>


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
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Current Projects</dt></h3>

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
                                            <li class="active"><a href="#tab_1" data-toggle="tab">County Government Projects</a></li>
                                            <li><a href="#tab_2" data-toggle="tab">N.G.O Projects</a></li>
                                            <li><a href="#tab_3" data-toggle="tab">C.B.O Projects</a></li>

                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="box-body">
                                                    <ul class="products-list product-list-in-box">
                                                        <?php
                                                        $query = $conn->query("select * from saracurrent where type='county'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <li class="item">

                                                            <div class="product-img">
                                                                <img src="dist/img/p.png" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title"><?php echo $row['name']; ?>
                                                                    <span class="label label-warning pull-right"><?php echo $row['complete']; ?></span></a>
                                                                <div class="progress progress-xxs">
                                                                    <div class="progress-bar progress-bar-danger" style="width: <?php echo $row['per']; ?>"></div>
                                                                </div>
                        <span class="product-description">
                          <?php echo $row['des']; ?>
                        </span>
                                                                <?php }?>
                                                            </div>
                                                        </li>

                                                        <!-- /.item -->

                                                        <!-- /.item -->

                                                        <!-- /.item -->

                                                        <!-- /.item -->
                                                    </ul>
                                                    <!-- /.table-responsive -->
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_2">
                                                <div class="box-body">
                                                    <ul class="products-list product-list-in-box">
                                                        <?php
                                                        $query = $conn->query("select * from saracurrent where type='ngo'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <li class="item">

                                                            <div class="product-img">
                                                                <img src="dist/img/p.png" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title"><?php echo $row['name']; ?>
                                                                    <span class="label label-warning pull-right"><?php echo $row['complete']; ?></span></a>
                                                                <div class="progress progress-xxs">
                                                                    <div class="progress-bar progress-bar-danger" style="width: <?php echo $row['per']; ?>"></div>
                                                                </div>
                        <span class="product-description">
                          <?php echo $row['des']; ?>
                        </span>
                                                                <?php }?>
                                                            </div>
                                                        </li>

                                                        <!-- /.item -->

                                                        <!-- /.item -->

                                                        <!-- /.item -->

                                                        <!-- /.item -->
                                                    </ul>
                                                    <!-- /.table-responsive -->
                                                </div>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_3">
                                                <div class="box-body">
                                                    <ul class="products-list product-list-in-box">
                                                        <?php
                                                        $query = $conn->query("select * from saracurrent where type='cbo'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <li class="item">

                                                            <div class="product-img">
                                                                <img src="dist/img/p.png" alt="Product Image">
                                                            </div>
                                                            <div class="product-info">
                                                                <a href="javascript:void(0)" class="product-title"><?php echo $row['name']; ?>
                                                                    <span class="label label-warning pull-right"><?php echo $row['complete']; ?></span></a>
                                                                <div class="progress progress-xxs">
                                                                    <div class="progress-bar progress-bar-danger" style="width: <?php echo $row['per']; ?>"></div>
                                                                </div>
                        <span class="product-description">
                          <?php echo $row['des']; ?>
                        </span>
                                                                <?php }?>
                                                            </div>
                                                        </li>

                                                        <!-- /.item -->

                                                        <!-- /.item -->

                                                        <!-- /.item -->

                                                        <!-- /.item -->
                                                    </ul>
                                                    <!-- /.table-responsive -->
                                                </div>
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
            <h2 class="page-header text-center" id="pprojects"><dt>PLANNED PROJECTS</dt></h2>
            <div class="row" >
                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Priorities Graph</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">

                                    <div class="row">
                                        <div class="box-pane">
                                            <canvas id="pieChart" style="height:500px"></canvas>
                                        </div>

                                    </div>
                                    <!-- ./chart-responsive -->
                                </div>
                                <!-- /.col -->
                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="fa fa-circle-o text-red"></i> National Government</li>
                                        <li><i class="fa fa-circle-o text-green"></i> County Government</li>
                                        <li><i class="fa fa-circle-o text-yellow"></i> N.G.O Projects</li>
                                        <li><i class="fa fa-circle-o text-aqua"></i> C.B.O Projects</li>
                                        <li><i class="fa fa-circle-o text-light-blue"></i> E.B.O Projects</li>
                                        <li><i class="fa fa-circle-o text-gray"></i> Others</li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <?php
                        $query = $conn->query("select * from pieinfo where page='sara'");
                        while ($row = $query->fetch()) {

                            ?>
                            <div>
                                <p> <?php echo $row['des']; ?></p>
                            </div>
                        <?php }?>
                        <!-- /.box-body -->

                        <!-- /.footer -->
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Project Priorities Information</h3>

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
                                            <li class="active"><a href="#tab_4" data-toggle="tab">Graph</a></li>
                                            <li><a href="#tab_5" data-toggle="tab">Gallery</a></li>
                                            <li><a href="#tab_6" data-toggle="tab">Projects</a></li>


                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_4">
                                                <div class="chart">
                                                    <canvas id="barCharts" style="height:230px"></canvas>
                                                </div>
                                                <?php
                                                $query = $conn->query("select * from barinfo where page='sara'");
                                                while ($row = $query->fetch()) {

                                                    ?>

                                                    <p><?php echo $row['des']; ?></p>  <?php } ?>
                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_5">
                                                <div class="box box-solid">

                                                    <!-- /.box-header -->
                                                    <style>


                                                        .carousel-inner>.item>img, .carousel-inner>.item>a>img
                                                        {
                                                            height:300px;
                                                            width:700px;
                                                        }

                                                    </style>
                                                    <?php




                                                    $query = $conn->query("select * from saproimg") or die(mysql_error());
                                                    $count = $query->rowcount();
                                                    $slides='';
                                                    $Indicators='';
                                                    $counter=0;

                                                    while ($row = $query->fetch())
                                                    {

                                                        $title = $row['title'];
                                                        $desc = $row['desc'];
                                                        $image = $row['image'];
                                                        if($counter == 0)
                                                        {
                                                            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                                                            $slides .= '<div class="item active">
            <img src="sara/gallery/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

                                                        }
                                                        else
                                                        {
                                                            $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                                                            $slides .= '<div class="item">
            <img src="sara/gallery/'.$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
                                                        }
                                                        $counter++;
                                                    }

                                                    ?>
                                                    <div class="box-body">
                                                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <?php echo $Indicators; ?>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <?php echo $slides; ?>
                                                            </div>

                                                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                                                <span class="fa fa-angle-left"></span>
                                                            </a>
                                                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                                                <span class="fa fa-angle-right"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>

                                                <!-- /.box-footer -->
                                            </div>

                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="tab_6">

                                                <div class="box-header with-border">
                                                    <h3 class="box-title">Projects and Budget</h3>


                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <ul class="products-list product-list-in-box">
                                                        <?php
                                                        $query = $conn->query("select * from planned where page='sara'");
                                                        while ($row = $query->fetch()) {

                                                            ?>
                                                            <li class="item">
                                                                <div class="product-img">
                                                                    <img src="dist/img/p.png" alt="Product Image">
                                                                </div>
                                                                <div class="product-info">
                                                                    <a href="javascript:void(0)" class="product-title"><?php echo $row['name']; ?>
                                                                        <span class="label label-warning pull-right">Ksh.<?php echo $row['budget']; ?></span></a>
                                                                    <p>
                                                                        <?php echo $row['des']; ?>
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        <?php } ?>
                                                        <!-- /.item -->

                                                    </ul>
                                                </div>
                                                <!-- /.box-body -->
                                                <div class="box-footer clearfix">

                                                    <a href="#" class="btn btn-sm btn-danger  center-block">View All Projects</a>
                                                </div>


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
            </div>

            <div class="row">
                <h2 class="page-header text-center"><dt>OUR PARTNERS</dt></h2>
                <div class="box-default">
                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;">
                        <!-- Loading Screen -->
                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                            <div style="position:absolute;display:block;background:url('scroller/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                        </div>
                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden;">
                            <div>
                                <img data-u="image" src="scroller/img/13.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/14.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/12.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/11.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/10.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/9.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/8.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/7.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/6.PNG" />
                            </div>
                            <a data-u="any" href="http://www.jssor.com" style="display:none">Our Partners</a>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/5.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/4.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/3.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/1.PNG" />
                            </div>
                            <div style="display: none;">
                                <img data-u="image" src="scroller/img/2.PNG" />
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>



                </ul>
                <!-- /.control-sidebar-menu -->


                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->

            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->


                    <!-- /.form-group -->


                    <!-- /.form-group -->




                    <!-- /.form-group -->


                    <!-- /.form-group -->


                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/sapie.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/sarabar.js"></script>
<script src="scroller/js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
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
