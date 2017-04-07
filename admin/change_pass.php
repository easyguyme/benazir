<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<!-- daterange picker -->

<!-- Theme style -->
<link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
<noscript> Please enable Javascript.</noscript>
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="box box-warning">
                        <?PHP


                        include("dbcon.php");
                        include("change_password_class.php");
                        $changePassword = new changePassword($conn);

                        ?>

                        <?PHP if(isset($_SESSION["logged_in"])): ?>


                            <div class="box ">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Change Admin Password</h3>
                                </div>

                                <form name = "change_password" method = "POST" id = "change_password_form" action="change_pass.php">

                                    <div class="box-body">
                                        <div class="form-group col-sm-10">
                                            <label for = "new_password">Old password:</label>
                                            <div class="input-group  col-sm-10">
                                                <input id = "old_password" name = "old_password" type = "password" class="form-control" >

                                            </div>
                                            <div id = "error_old_password"></div>

                                        </div>

                                        <div class="form-group col-sm-10">
                                            <label for = "new_password">New password:</label>
                                            <div class="input-group  col-sm-10">
                                                <input id = "new_password" name = "new_password" type = "password" class="form-control" >

                                            </div>
                                            <div id = "error_new_password"></div>

                                        </div>
                                        <div class="form-group col-sm-10">
                                            <label for = "new_password_two">New password(repeat):</label>
                                            <div class="input-group  col-sm-10">
                                                <input id = "new_password_two" name = "new_password_two" type = "password" class="form-control" >

                                            </div>
                                            <div id = "error_new_password_two"></div>

                                            <div id = "error"></div>

                                        </div>





                                    </div>

                                    <div class="box-footer">
                                        <button  name = "change_password_button" class="btn btn-danger" type="submit">Save changes</button>
                                    </div>
                                </form>

                            </div>
                            <!-- Registration form -->



                        <?PHP else: ?>
                            Login to change your password
                        <?PHP endif; ?>


                    </div>
                </div>
                <div class="col-md-3"></div>

            </div>



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

<script src="assets/js_form_validator.js"></script>

</body>
</html>

