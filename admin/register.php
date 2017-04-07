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

                <div class="col-md-6">
                    <div class="box box-info">
                        <?PHP



                        include("dbcon.php");
                        include("php_functions.php");
                        include("php_form_validator.php");

                        $RegistrationValidator				= new RegistrationValidator($conn);
                        $is_user_ip_banned					= $RegistrationValidator->is_user_ip_banned();
                        ?>

                        <?PHP if(!$is_user_ip_banned): ?>


                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Register Admin</h3>
                            </div>

                            <form name = "register" method = "POST" id = "reg_form" action="register.php">

                                <div class="box-body">


                                    <div class="form-group col-sm-10">
                                        <label>First Name:</label>
                                        <div class="input-group  col-sm-8">
                                            <input id = "fname" name = "fname" type = "text" class="form-control" value = "<?PHP echo is_value_set("fname");?>"/>

                                        </div>
                                        <div id="error_fname"></div>

                                    </div>
                                    <div class="form-group col-sm-10">
                                        <label>Second Name:</label>
                                        <div class="input-group  col-sm-8">
                                            <input id = "sname" name = "sname" type = "text" class="form-control" value = "<?PHP echo is_value_set("sname");?>"/>

                                        </div>
                                        <div id="error_sname"></div>

                                    </div>

                                    <div class="form-group col-sm-10">
                                        <label>Email:</label>
                                        <div class="input-group  col-sm-8">
                                            <input id = "email" name = "email" class="form-control" value = "<?PHP echo is_value_set("email"); ?>" />
                                        </div>
                                        <div id="error_email"></div>

                                    </div>

                                    <div class="form-group col-sm-10">
                                        <label>Password:</label>
                                        <div class="input-group  col-sm-8">
                                            <input id = "password_one" name = "password_one" class="form-control" type = "password"/>
                                        </div>


                                    </div>

                                    <div class="form-group col-sm-10">
                                        <label>Repeat Password:</label>
                                        <div class="input-group  col-sm-8">
                                            <input id = "password_two" name = "password_two" class="form-control" type = "password"/>
                                        </div>
                                        <div id="error_password"></div>

                                    </div>
                                    <div class="form-group col-sm-10">
                                        <label>Enter Captcha:</label>
                                        <div class="input-group  col-sm-8">
                                            <input id = "captcha" name = "captcha" class="form-control" type = "text"/> 
                                        </div>
                                        <div id="error_captcha"></div>
                                        <?PHP RegistrationValidator::display_captcha(); ?> </br>

                                    </div>


                                    

                                </div>

                                <div class="box-footer">
                                    <button  name="register_button" class="btn btn-info" type="submit">Save changes</button>
                                </div>
                            </form>

                        </div>
                                <!-- Registration form -->



                        <?PHP else: ?>
                            Sorry but I'm no longer accepting any new accounts from this IP address.
                        <?PHP endif; ?>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-info">
                        <div class="row-fluid">
                            <!-- block -->
                            <div id="block_bg" class="block">
                                <div class="box-header with-border">
                                    <h3 class="box-title">View Admins</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form action="user_del.php" method="post">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                                &nbsp;&nbsp;<a data-toggle="modal" href="#userdelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>
                                                <?php include('modal_delete.php'); ?>
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>First name</th>
                                                    <th>Last name</th>
                                                    <th>Email</th>

                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from registration ");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['user_id'];
                                                    ?>

                                                    <tr>
                                                        <td width="30">
                                                            <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                        </td>
                                                        <td><?php echo $row['fname']; ?></td>
                                                        <td><?php echo $row['sname']; ?></td>

                                                        <td><?php echo $row['email']; ?></td>

                                                        <td width="30"><a href="#" class="btn btn-sm btn-warning">Deactivate</a></td>



                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /block -->



                        </div>


                    </div>
                </div>

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

