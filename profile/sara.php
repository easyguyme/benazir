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
                MAKINA Ward | Women Profiles
                <small>Version 1.0</small>

            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="sara.php"><i class="fa  fa-sticky-note"></i> Sarang'ombe</a></li>
                <li class="active">Women Profiles
                </li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <?php
                            $query = $conn->query("select * from profiles where page='sara' and leader='1'");
                            while ($row = $query->fetch()) {

                            ?>
                            <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>" alt="User profile picture">

                            <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                            <p class="text-muted text-center"><?php echo $row['designation']; ?></p>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><dt>About Me</dt></h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <strong><i class="fa fa-comment margin-r-1"></i> Bio</strong>

                                    <p class="text-muted">
                                        <?php echo $row['bio']; ?>
                                    </p>

                                    <hr>
                                    <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                    <p class="text-muted">
                                        <?php echo $row['education']; ?>
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-circle-o-notch margin-r-5"></i> Age</strong>

                                    <span class="label label-danger"><?php echo $row['age']; ?> Years</span>

                                    <hr>


                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                    <p class="text-muted"><?php echo $row['location']; ?></p>

                                    <hr>
                                    <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                    <p>
                                        <span class="label label-danger"><?php echo $row['skill1']; ?></span>
                                        <span class="label label-success"><?php echo $row['skill2']; ?></span>
                                        <span class="label label-info"><?php echo $row['skill3']; ?></span>
                                        <span class="label label-warning"><?php echo $row['skill4']; ?></span>

                                    </p>
                                    <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                    <p>
                                        <span class="label label-danger"><?php echo $row['hobby1']; ?></span>
                                        <span class="label label-success"><?php echo $row['hobby2']; ?></span>
                                        <span class="label label-info"><?php echo $row['hobby3']; ?></span>
                                        <span class="label label-warning"><?php echo $row['hobby4']; ?></span>


                                    </p>
                                    <?php } ?>
                                </div>
                                <!-- /.box-body -->
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->

                    <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">

                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#activity" data-toggle="tab">Briefing</a></li>
                            <li><a href="#timeline" data-toggle="tab">Women Profiles</a></li>
                            <li><a href="#information" data-toggle="tab">Voice Center Info</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">


                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <i class="fa fa-book"></i>

                                        <h3 class="box-title"><dt>Women’s Voices ICT Briefing </dt></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <div class="col-sm-3">
                                            <?php
                                            $query = $conn->query("select * from ward where page='sara'");
                                            while ($row = $query->fetch()) {

                                            ?>
                                            <img class="img-responsive" src="<?php echo $row['img']; ?>" alt="Photo">
                                        </div>
                                        <div class="col-sm-9">
                                            <dl>

                                                <dd><?php echo $row['brief']; ?> </dd>

                                            </dl>
                                            <?php } ?>
                                        </div>

                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="timeline">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box box-primary">
                                            <div class="box-body box-profile">
                                                <?php
                                                $query = $conn->query("select * from profiles where page='sara' and leader='2'");
                                                while ($row = $query->fetch()) {

                                                ?>
                                                <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>" alt="User profile picture">

                                                <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                                                <p class="text-muted text-center"><?php echo $row['designation']; ?></p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title"><dt>About Me</dt></h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-comment margin-r-1"></i> Bio</strong>

                                                        <p class="text-muted">
                                                            <?php echo $row['bio']; ?>
                                                        </p>

                                                        <hr>
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            <?php echo $row['education']; ?>
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-circle-o-notch margin-r-5"></i> Age</strong>

                                                        <span class="label label-danger"><?php echo $row['age']; ?> Years</span>

                                                        <hr>


                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted"><?php echo $row['location']; ?></p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger"><?php echo $row['skill1']; ?></span>
                                                            <span class="label label-success"><?php echo $row['skill2']; ?></span>
                                                            <span class="label label-info"><?php echo $row['skill3']; ?></span>
                                                            <span class="label label-warning"><?php echo $row['skill4']; ?></span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger"><?php echo $row['hobby1']; ?></span>
                                                            <span class="label label-success"><?php echo $row['hobby2']; ?></span>
                                                            <span class="label label-info"><?php echo $row['hobby3']; ?></span>
                                                            <span class="label label-warning"><?php echo $row['hobby4']; ?></span>


                                                        </p>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>

                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box-body box-profile">
                                            <?php
                                            $query = $conn->query("select * from profiles where page='sara' and leader='3'");
                                            while ($row = $query->fetch()) {

                                            ?>
                                            <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>" alt="User profile picture">

                                            <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                                            <p class="text-muted text-center"><?php echo $row['designation']; ?></p>
                                            <div class="box box-primary">
                                                <div class="box-header with-border">
                                                    <h3 class="box-title"><dt>About Me</dt></h3>
                                                </div>
                                                <!-- /.box-header -->
                                                <div class="box-body">
                                                    <strong><i class="fa fa-comment margin-r-1"></i> Bio</strong>

                                                    <p class="text-muted">
                                                        <?php echo $row['bio']; ?>
                                                    </p>

                                                    <hr>
                                                    <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                    <p class="text-muted">
                                                        <?php echo $row['education']; ?>
                                                    </p>

                                                    <hr>

                                                    <strong><i class="fa fa-circle-o-notch margin-r-5"></i> Age</strong>

                                                    <span class="label label-danger"><?php echo $row['age']; ?> Years</span>

                                                    <hr>


                                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                    <p class="text-muted"><?php echo $row['location']; ?></p>

                                                    <hr>
                                                    <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                    <p>
                                                        <span class="label label-danger"><?php echo $row['skill1']; ?></span>
                                                        <span class="label label-success"><?php echo $row['skill2']; ?></span>
                                                        <span class="label label-info"><?php echo $row['skill3']; ?></span>
                                                        <span class="label label-warning"><?php echo $row['skill4']; ?></span>

                                                    </p>
                                                    <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                    <p>
                                                        <span class="label label-danger"><?php echo $row['hobby1']; ?></span>
                                                        <span class="label label-success"><?php echo $row['hobby2']; ?></span>
                                                        <span class="label label-info"><?php echo $row['hobby3']; ?></span>
                                                        <span class="label label-warning"><?php echo $row['hobby4']; ?></span>


                                                    </p>
                                                    <?php } ?>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>

                                        </div>
                                    </div>

                                </div> <!-- The timeline -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box box-primary">
                                            <div class="box-body box-profile">
                                                <?php
                                                $query = $conn->query("select * from profiles where page='sara' and leader='4'");
                                                while ($row = $query->fetch()) {

                                                ?>
                                                <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>" alt="User profile picture">

                                                <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                                                <p class="text-muted text-center"><?php echo $row['designation']; ?></p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title"><dt>About Me</dt></h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-comment margin-r-1"></i> Bio</strong>

                                                        <p class="text-muted">
                                                            <?php echo $row['bio']; ?>
                                                        </p>

                                                        <hr>
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            <?php echo $row['education']; ?>
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-circle-o-notch margin-r-5"></i> Age</strong>

                                                        <span class="label label-danger"><?php echo $row['age']; ?> Years</span>

                                                        <hr>


                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted"><?php echo $row['location']; ?></p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger"><?php echo $row['skill1']; ?></span>
                                                            <span class="label label-success"><?php echo $row['skill2']; ?></span>
                                                            <span class="label label-info"><?php echo $row['skill3']; ?></span>
                                                            <span class="label label-warning"><?php echo $row['skill4']; ?></span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger"><?php echo $row['hobby1']; ?></span>
                                                            <span class="label label-success"><?php echo $row['hobby2']; ?></span>
                                                            <span class="label label-info"><?php echo $row['hobby3']; ?></span>
                                                            <span class="label label-warning"><?php echo $row['hobby4']; ?></span>


                                                        </p>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>

                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="box box-primary">
                                            <div class="box-body box-profile">
                                                <?php
                                                $query = $conn->query("select * from profiles where page='sara' and leader='5'");
                                                while ($row = $query->fetch()) {

                                                ?>
                                                <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>" alt="User profile picture">

                                                <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                                                <p class="text-muted text-center"><?php echo $row['designation']; ?></p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title"><dt>About Me</dt></h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-comment margin-r-1"></i> Bio</strong>

                                                        <p class="text-muted">
                                                            <?php echo $row['bio']; ?>
                                                        </p>

                                                        <hr>
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            <?php echo $row['education']; ?>
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-circle-o-notch margin-r-5"></i> Age</strong>

                                                        <span class="label label-danger"><?php echo $row['age']; ?> Years</span>

                                                        <hr>


                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted"><?php echo $row['location']; ?></p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger"><?php echo $row['skill1']; ?></span>
                                                            <span class="label label-success"><?php echo $row['skill2']; ?></span>
                                                            <span class="label label-info"><?php echo $row['skill3']; ?></span>
                                                            <span class="label label-warning"><?php echo $row['skill4']; ?></span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger"><?php echo $row['hobby1']; ?></span>
                                                            <span class="label label-success"><?php echo $row['hobby2']; ?></span>
                                                            <span class="label label-info"><?php echo $row['hobby3']; ?></span>
                                                            <span class="label label-warning"><?php echo $row['hobby4']; ?></span>


                                                        </p>
                                                        <?php } ?>
                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>

                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="box box-primary">
                                                <div class="box-body box-profile">
                                                    <?php
                                                    $query = $conn->query("select * from profiles where page='sara' and leader='6'");
                                                    while ($row = $query->fetch()) {

                                                    ?>
                                                    <img class="profile-user-img img-responsive img-circle" src="<?php echo $row['image']; ?>" alt="User profile picture">

                                                    <h3 class="profile-username text-center"><?php echo $row['name']; ?></h3>

                                                    <p class="text-muted text-center"><?php echo $row['designation']; ?></p>
                                                    <div class="box box-primary">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title"><dt>About Me</dt></h3>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                            <strong><i class="fa fa-comment margin-r-1"></i> Bio</strong>

                                                            <p class="text-muted">
                                                                <?php echo $row['bio']; ?>
                                                            </p>

                                                            <hr>
                                                            <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                            <p class="text-muted">
                                                                <?php echo $row['education']; ?>
                                                            </p>

                                                            <hr>

                                                            <strong><i class="fa fa-circle-o-notch margin-r-5"></i> Age</strong>

                                                            <span class="label label-danger"><?php echo $row['age']; ?> Years</span>

                                                            <hr>


                                                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                            <p class="text-muted"><?php echo $row['location']; ?></p>

                                                            <hr>
                                                            <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                            <p>
                                                                <span class="label label-danger"><?php echo $row['skill1']; ?></span>
                                                                <span class="label label-success"><?php echo $row['skill2']; ?></span>
                                                                <span class="label label-info"><?php echo $row['skill3']; ?></span>
                                                                <span class="label label-warning"><?php echo $row['skill4']; ?></span>

                                                            </p>
                                                            <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                            <p>
                                                                <span class="label label-danger"><?php echo $row['hobby1']; ?></span>
                                                                <span class="label label-success"><?php echo $row['hobby2']; ?></span>
                                                                <span class="label label-info"><?php echo $row['hobby3']; ?></span>
                                                                <span class="label label-warning"><?php echo $row['hobby4']; ?></span>


                                                            </p>
                                                            <?php } ?>
                                                        </div>
                                                        <!-- /.box-body -->
                                                    </div>

                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="information">
                                <div class="box box-success">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <i class="fa fa-info-circle"></i>

                                            <h3 class="box-title"><dt>Voice Centre Brief</dt></h3>
                                        </div>
                                        <div class="box-body">
                                            <!-- /.col -->
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <?php
                                                        $query = $conn->query("select * from ward where page='sara'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Map to this centre</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <iframe src="<?php echo $row['map']; ?>" width="340" height="380"></iframe>

                                                            <?php } ?>
                                                        </div>
                                                        <!-- /.box-body -->

                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <?php
                                                        $query = $conn->query("select * from ward where page='sara'");
                                                        while ($row = $query->fetch()) {

                                                        ?>
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">About this centre</h3>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                            <strong><i class="fa fa-book margin-r-5"></i> Background info</strong>

                                                            <p class="text-muted">
                                                                <?php echo $row['info']; ?>
                                                            </p>

                                                            <hr>

                                                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                            <p class="text-muted"><?php echo $row['location']; ?></p>

                                                            <hr>
                                                            <strong><i class="fa fa-money margin-r-5"></i> Funding Agency</strong>

                                                            <p class="text-muted"><?php echo $row['funding']; ?></p>

                                                            <hr>
                                                            <strong><i class="fa fa-database margin-r-5"></i>Objectives</strong>

                                                            <p>
                                                                <span class="label label-danger"><?php echo $row['obj1']; ?></span>
                                                                <span class="label label-success"><?php echo $row['obj2']; ?></span>
                                                                <span class="label label-info"><?php echo $row['obj3']; ?></span>
                                                                <span class="label label-warning"><?php echo $row['obj4']; ?></span>

                                                            </p>

                                                            <hr>
                                                            <strong><i class="fa fa-list-alt margin-r-5"></i>Activities</strong>

                                                            <p>
                                                                <span class="label label-danger"><?php echo $row['act1']; ?></span>
                                                                <span class="label label-success"><?php echo $row['act2']; ?></span>
                                                                <span class="label label-info"><?php echo $row['act3']; ?></span>
                                                                <span class="label label-warning"><?php echo $row['act4']; ?></span>

                                                            </p>


                                                            <strong><i class="fa fa-line-chart margin-r-5"></i>Achievements</strong>

                                                            <p>
                                                                <span class="label label-danger"><?php echo $row['ach1']; ?></span>
                                                                <span class="label label-success"><?php echo $row['ach2']; ?></span>
                                                                <span class="label label-info"><?php echo $row['ach3']; ?></span>
                                                                <span class="label label-warning"><?php echo $row['ach4']; ?></span>

                                                            </p>


                                                            <?php } ?>

                                                        </div>
                                                    </div>
                                                    <!-- /.col -->
                                                </div>
                                                <!-- /.row -->
                                            </div>

                                        </div>

                                    </div>
                                    <!-- /.box-body -->
                                </div>
                            </div>

                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>

                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include "../footer.php" ?>

    <!-- Control Sidebar -->

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>
<script src="../plugins/chartjs/Chart.min.js"></script>
<script src="../dist/js/pages/makina.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../dist/js/demo.js"></script>
<script src="/scroller/js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
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
