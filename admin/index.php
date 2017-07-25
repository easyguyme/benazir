<?php include('header.php'); ?>

<?PHP
include("php_functions.php");
include("dbcon.php");
include("login_class.php");
$Login = new login($conn);
if( !isset($_SESSION) ){
    session_start();
}
?>
<body class="layout-top-nav skin-red hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="index.php"><b>Admin</b>Umande</a>
    </div>
    <!-- /.login-logo -->
    <?PHP if(!$Login->is_user_ip_banned()): ?>
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?PHP if(!isset($_SESSION["logged_in"])): ?>
        <form  id="login_form" method="post" action="index.php">
            <div class="form-group has-feedback">
                <input type="text" class="form-control"  name="username" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control"  name="password" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">

                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <?PHP else:
            header("location: home.php");
            ?>


        <?PHP endif ?>
        Your userid was blocked.
        <?PHP else: ?>
            Your IP address has been blocked.
        <?PHP endif; ?>


        <!-- /.social-auth-links -->

        <a href="recover.php">I forgot my password</a><br>


    </div>
    <!-- /.login-box-body -->
</div>


</body>

</html>
