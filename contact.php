<!DOCTYPE html>
<html>

<?php include('header.php'); ?>
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.8/validator.js">
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
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
                Women Voices, ICT Choices | Contact Us
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
<div class="row">
    <div class="col-md-4">
        <?php
        $query = $conn->query("select * from contact where id='1'");
        while ($row = $query->fetch()) {

            ?>

            <iframe src="<?php echo $row['url']; ?>" width="1200" height="350" frameborder="0" style="border:0"
                    allowfullscreen></iframe>
            <?php
        }

        ?>
    </div>

</div>
            <div class="row">

<div class="col-md-4">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title">Main Offices</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                        class="fa fa-times"></i></button>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <strong><i class="fa fa-pencil margin-r-5"></i>Postal Address</strong>
            <?php
            $query = $conn->query("select * from contact");
            while ($row = $query->fetch()) {

            ?>
            <p class="text-muted">
                <?php echo $row['pob']; ?>
            </p>

            <hr>

            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

            <p class="text-muted"> <?php echo $row['loc']; ?></p>

            <hr>


            <strong><i class="fa fa-phone margin-r-5"></i>Phone</strong>


            <p class="text-muted"><?php echo $row['phone']; ?></p>
            <hr>
            <strong><i class="fa fa-envelope margin-r-5"></i>Email</strong>


            <p class="text-muted"> <?php echo $row['mail']; ?></p>



         
        </div>
        <?php }?>
        <!-- /.box-body -->
    </div>
</div>
                <div class="col-md-8">

                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Email us!</h3>
                            <?php
                            require ('PHPMailer/PHPMailerAutoload.php');

                            if(isset($_POST['submit'])) {

                                $fname = $_POST["fname"];
                                $sname = $_POST["sname"];
                                $email = $_POST["email"];
                                $phone = $_POST["phone"];
                                $message = $_POST["message"];
                                $subject = $_POST["subject"];

//Create a new PHPMailer instance
                                $mail = new PHPMailer;
//Tell PHPMailer to use SMTP
                                $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
                                $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
                                $mail->Debugoutput = 'html';
//Set the hostname of the mail server
                                $mail->Host = 'mail.womenvoicesictchoices.org';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                                $mail->Port = 2525;
//Set the encryption system to use - ssl (deprecated) or tls
                                $mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
                                $mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
                                $mail->Username = "feedback@womenvoicesictchoices.org";
//Password to use for SMTP authentication
                                $mail->Password = "feedback@umande2017";
//Set who the message is to be sent from
                                $mail->setFrom($email,"$fname " . " $sname" );
//Set an alternative reply-to address
                               $mail->addReplyTo($email, $fname);
//Set who the message is to be sent to
                                $mail->addAddress("feedback@womenvoicesictchoices.org", "Umande Dashboard");
//Set the subject line
                                $mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
                                $mail->Body="Dear Admin you have a mail from Umande Dashboard Contact Page!  "  .  "\n\n" . $message;
//Replace the plain text body with one created manually
                                $mail->isHTML(true);
//Attach an image file
                               // $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
                                if (!$mail->send()) {
                                    echo "Mailer Error: " . $mail->ErrorInfo;
                                } else {
                                    echo '<p class="center" style="color: red">Mail Sent. Thank you ' . $fname . ', we will contact you shortly.</p>';
                                }



                            }

                            ?>
                            

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                        class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <form method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form"  name="form">
                            <div class="form-group">
                                <label for="fname" class="col-sm-2 control-label">First Name<em>*</em></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sname" class="col-sm-2 control-label">Second Name<em>*</em></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control"name="sname" id="sname" placeholder="Second Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email<em>*</em></label>

                                <div class="col-sm-5">
                                    <input type="email" class="form-control"name="email" id="email" placeholder="you@who.what" data-error="Bruh, that email address is invalid" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col-sm-2 control-label">Phone<em>*</em></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="subject" class="col-sm-2 control-label">Subject<em>*</em></label>

                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Mail Subject" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Message<em>*</em></label>

                                <div class="col-sm-10 pad">
                                    <textarea class="" name="message" id="editor1" placeholder="Write your message here" required style="width: 75%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="submit" class="btn btn-danger">Send</button>
                                </div>
                            </div>
                            <br>
                        </form>

                    </div>
                </div>

            </div>


            <!-- /.row -->

            <!-- Main row -->

            <!-- Info boxes -->
            <?php include('social.php'); ?>
            <!-- /.row -->

            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <?php include('footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Upcoming Activities</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <i class="menu-icon fa fa-users bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Annual General Meeting</h4>

                                <p>Will be held on November 24th at KICC starting from 10.00am </p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Elimu Grant target</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript::;">
                            <h4 class="control-sidebar-subheading">
                                Contributions
                <span class="pull-right-container">
                  <span class="label label-danger pull-right">70%</span>
                </span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Terms and Conditions Apply
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            By using this dashboard you accept our <a href="#"> Terms and Conditions</a>
                        </p>
                    </div>
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
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
    });
</script>

</body>
</html>
