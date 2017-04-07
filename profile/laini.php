<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Umande Trust | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/skin-green.css">
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="../index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>UT</b>D</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Umande</b>Trust</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- /.messages-menu -->

                    <!-- Notifications Menu -->

                    <!-- Tasks Menu -->

                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="../dist/img/UmandeLogo.png" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Umande Trust</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="../dist/img/UmandeLogo.png" class="img-circle" alt="User Image">

                                <p>
                                    Umande Trust Nairobi
                                    <small>"New Dawn:Nascent start"</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">About</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#"></a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Contacts</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="http://umande.org" class="btn btn-default btn-flat">Website</a>
                                </div>
                                <div class="pull-right">
                                    <a href="http://umandetrust.blogspot.co.ke" class="btn btn-default btn-flat">Blog</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-bell"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="../dist/img/UmandeLogo.png" class="img-responsive" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Umande Trust</p>
                    <!-- Status -->
                    <a href="../index.php"><i class="fa fa-circle text-success"></i> New Dawn:Nascent start</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">MAIN NAVIGATION</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active treeview"><a href="../index.php"><i class="fa fa-home"></i> <span>Home</span></a></li>

                <li class="treeview">
                    <a href="#"><i class="fa fa-plus-square-o"></i> <span>Project Areas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="../mak.php"><i class="fa fa-female"></i>Makina</a></li>
                        <li><a href="../sara.php"><i class="fa fa-female"></i>Sarangombe</a></li>
                        <li><a href="../lindi.php"><i class="fa fa-female"></i>Lindi</a></li>
                        <li><a href="../saba.php"><i class="fa fa-female"></i>Laini Saba</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="fa fa-maxcdn"></i> <span>In the Media</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-plus-square-o"></i> <span>Areas Statistics</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-female"></i>Makina</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Sarangombe</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Lindi</a></li>
                        <li><a href="#"><i class="fa fa-female"></i>Laini Saba</a></li>
                    </ul>
                </li>
                <li><a href="/pages/calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> <span>Contact Us</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Makina Ward's Profile
            </h1>
            <ol class="breadcrumb">
                <li><a href="../index.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="../mak.php">Makina</a></li>
                <li class="active">Profiles</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <img class="profile-user-img img-responsive img-circle" src="../dist/img/pp.jpg" alt="User profile picture">

                            <h3 class="profile-username text-center">Benazir Omotto</h3>

                            <p class="text-muted text-center">Ward Leader</p>
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">About Me</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                    <p class="text-muted">
                                        B.S. in Computer Science from the University of Tennessee at Knoxville
                                    </p>

                                    <hr>

                                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                    <p class="text-muted">Makina, Kibera</p>

                                    <hr>
                                    <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                    <p>
                                        <span class="label label-danger">programming</span>
                                        <span class="label label-success">Cooking</span>
                                        <span class="label label-info">Project management</span>

                                    </p>
                                    <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                    <p>
                                        <span class="label label-danger">Swimming</span>
                                        <span class="label label-success">Cooking</span>
                                        <span class="label label-info">Travelling</span>
                                        <span class="label label-warning">Driving</span>
                                        <span class="label label-primary">Camping</span>

                                    </p>

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
                            <li><a href="#settings" data-toggle="tab">Contact Us</a></li>
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
                                        <dl>

                                            <dd>There is a gap in gender representation among the people of Kibera in regards to having the women’s voices heard on issues involving their community and the society they live in.  This project, Women’s Voices, seeks to capture women’s views and ideas about county development, and make sure, these ideas are shared with the relevant authorities. It looks to address four main themes of governance, transparency, accountability, and anti-corruption. To do this, we plan to train women in the community to be representatives of the rest of the community, called women voices champions. These women will be in charge of collection and analyzing data from and about the community as well as other administrative work. The women will also be in charge of updating a dashboard that connects the project to the community and the rest of the world through social media, and updating the dashboard with real time information about what is happening in the community. The information they work to collect and present will be shared with the relevant county officials, so they can put the community’s thoughts into action. The women’s voices champions will help to give voice to other female members of the community whose ideas and opinions may not have been able to be shared without this project. Women’s Voices will be run through four of Kibera’s bio-sanitation facilities since they are already a focal point for men and women in the community. </dd>

                                        </dl>
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
                                                <img class="profile-user-img img-responsive img-circle" src="../dist/img/pp.jpg" alt="User profile picture">

                                                <h3 class="profile-username text-center">Benazir Omotto</h3>

                                                <p class="text-muted text-center">Woman champion</p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">About Me</h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            B.S. in Computer Science from the University of Tennessee at Knoxville
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted">Makina, Kibera</p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger">programming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Project management</span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger">Swimming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Travelling</span>
                                                            <span class="label label-warning">Driving</span>
                                                            <span class="label label-primary">Camping</span>

                                                        </p>

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
                                                <img class="profile-user-img img-responsive img-circle" src="../dist/img/pp.jpg" alt="User profile picture">

                                                <h3 class="profile-username text-center">Benazir Omotto</h3>

                                                <p class="text-muted text-center">Woman champion</p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">About Me</h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            B.S. in Computer Science from the University of Tennessee at Knoxville
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted">Makina, Kibera</p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger">programming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Project management</span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger">Swimming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Travelling</span>
                                                            <span class="label label-warning">Driving</span>
                                                            <span class="label label-primary">Camping</span>

                                                        </p>

                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>

                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>

                                </div> <!-- The timeline -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="box box-primary">
                                            <div class="box-body box-profile">
                                                <img class="profile-user-img img-responsive img-circle" src="../dist/img/pp.jpg" alt="User profile picture">

                                                <h3 class="profile-username text-center">Benazir Omotto</h3>

                                                <p class="text-muted text-center">Woman champion</p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">About Me</h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            B.S. in Computer Science from the University of Tennessee at Knoxville
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted">Makina, Kibera</p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger">programming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Project management</span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger">Swimming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Travelling</span>
                                                            <span class="label label-warning">Driving</span>
                                                            <span class="label label-primary">Camping</span>

                                                        </p>

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
                                                <img class="profile-user-img img-responsive img-circle" src="../dist/img/pp.jpg" alt="User profile picture">

                                                <h3 class="profile-username text-center">Benazir Omotto</h3>

                                                <p class="text-muted text-center">Woman champion</p>
                                                <div class="box box-primary">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title">About Me</h3>
                                                    </div>
                                                    <!-- /.box-header -->
                                                    <div class="box-body">
                                                        <strong><i class="fa fa-university margin-r-1"></i> Education</strong>

                                                        <p class="text-muted">
                                                            B.S. in Computer Science from the University of Tennessee at Knoxville
                                                        </p>

                                                        <hr>

                                                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                        <p class="text-muted">Makina, Kibera</p>

                                                        <hr>
                                                        <strong><i class="fa fa-wrench margin-r-5"></i> Skills</strong><br>
                                                        <p>
                                                            <span class="label label-danger">programming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Project management</span>

                                                        </p>
                                                        <strong><i class="fa fa-pencil margin-r-5"></i> Hobbies</strong>

                                                        <p>
                                                            <span class="label label-danger">Swimming</span>
                                                            <span class="label label-success">Cooking</span>
                                                            <span class="label label-info">Travelling</span>
                                                            <span class="label label-warning">Driving</span>
                                                            <span class="label label-primary">Camping</span>

                                                        </p>

                                                    </div>
                                                    <!-- /.box-body -->
                                                </div>

                                            </div>
                                            <!-- /.box-body -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.tab-pane -->

                            <div class="tab-pane" id="settings">
                                <?php
                                require ('../PHPMailer/PHPMailerAutoload.php');

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
                                    $mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                                    $mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
                                    $mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
                                    $mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
                                    $mail->Username = "wangara88@gmail.com";
//Password to use for SMTP authentication
                                    $mail->Password = "ashajuma";
//Set who the message is to be sent from
                                    $mail->setFrom($email,"Umande Dashboard" );
//Set an alternative reply-to address
                                    $mail->addReplyTo($email, $fname);
//Set who the message is to be sent to
                                    $mail->addAddress("wangara88@gmail.com", "Umande Dashboard");
//Set the subject line
                                    $mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
                                    $mail->Body="A mail from  "  .$fname. "   ".$sname . "\n\n" . $message;
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
                                <form method="post" class="form-horizontal" action="#settings" id="form"  name="form">
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
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>

                </div>
            </div>
            <!-- /.row -->
            <h3 class="box-title text-center"><dt>Additional Information</dt></h3>
            <div class="row">

                <div class="col-md-12">
                    <div class="nav-tabs-custom ">
                        <ul class="nav nav-tabs ">
                            <li class="active"><a href="#gallery" data-toggle="tab">Gallery</a></li>
                            <li><a href="#voice" data-toggle="tab">Voice centre Info</a></li>
                            <li><a href="#ward" data-toggle="tab">Ward Info</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="gallery">
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                        <i class="fa fa-camera"></i>

                                        <h3 class="box-title"><dt>Pictures From Past Events </dt></h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="col-sm-6">
                                            <img class="img-responsive" src="../dist/img/makina.jpeg" alt="Photo">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img class="img-responsive" src="../dist/img/makina2.jpeg" alt="Photo">
                                                    <br>
                                                    <img class="img-responsive" src="../dist/img/makina3.jpeg" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-sm-6">
                                                    <img class="img-responsive" src="../dist/img/gal1.jpg" alt="Photo">
                                                    <br>
                                                    <img class="img-responsive" src="../dist/img/gal2.jpg" alt="Photo">
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.row -->
                                        </div>

                                    </div>

                                </div>

                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="voice">
                                <div class="box box-success">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <i class="fa fa-info-circle"></i>

                                            <h3 class="box-title"><dt>Voice Centre Brief</dt></h3>
                                        </div>
                                        <div class="box-body">
                                            <div class="col-sm-4">
                                                <img class="img-responsive" src="../dist/img/Star.JPG" alt="Photo">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Map to this centre</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <iframe src="https://www.google.com/maps/d/embed?mid=1P16zI5wBQLpLOjeZ9lpFCWnUYHM" width="340" height="380"></iframe>


                                                        </div>
                                                        <!-- /.box-body -->

                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">About this centre</h3>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                            <strong><i class="fa fa-book margin-r-5"></i> Background info</strong>

                                                            <p class="text-muted">
                                                                This centre was started in 2014 to cater for ...........
                                                            </p>

                                                            <hr>

                                                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                            <p class="text-muted">Makina ward, Stara</p>

                                                            <hr>
                                                            <strong><i class="fa fa-money margin-r-5"></i> Funding Agency</strong>

                                                            <p class="text-muted">Unep</p>

                                                            <hr>
                                                            <strong><i class="fa fa-database margin-r-5"></i>Objectives</strong>

                                                            <p>
                                                                <span class="label label-danger">Objective</span>
                                                                <span class="label label-success">Objective</span>
                                                                <span class="label label-info">Objective</span>
                                                                <span class="label label-warning">Objective</span>
                                                                <span class="label label-primary">Objective</span>
                                                            </p>

                                                            <hr>
                                                            <strong><i class="fa fa-list-alt margin-r-5"></i>Activities</strong>

                                                            <p>
                                                                <span class="label label-danger">Activities</span>
                                                                <span class="label label-success">Activities</span>
                                                                <span class="label label-info">Activities</span>
                                                                <span class="label label-warning">Activities</span>
                                                                <span class="label label-primary">Activities</span>
                                                            </p>


                                                            <strong><i class="fa fa-line-chart margin-r-5"></i>Achievements</strong>

                                                            <p>
                                                                <span class="label label-danger">Achievements</span>
                                                                <span class="label label-success">Achievements</span>
                                                                <span class="label label-info">Achievements</span>
                                                                <span class="label label-warning">Achievements</span>
                                                                <span class="label label-primary">Achievements</span>
                                                            </p>




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

                            <div class="tab-pane" id="ward">
                                <div class="box box-success">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <i class="fa fa-info-circle"></i>

                                            <h3 class="box-title"><dt>Ward Brief</dt></h3>
                                        </div>
                                        <div class="box-body">

                                            <!-- /.col -->
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">Location</h3>
                                                        </div>
                                                        <div class="box-body">
                                                            <iframe src="https://www.google.com/maps/d/embed?mid=1P16zI5wBQLpLOjeZ9lpFCWnUYHM" width="340" height="380"></iframe>


                                                        </div>
                                                        <!-- /.box-body -->

                                                    </div>
                                                    <!-- /.col -->
                                                    <div class="col-sm-6">
                                                        <div class="box-header with-border">
                                                            <h3 class="box-title">About this ward</h3>
                                                        </div>
                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                            <strong><i class="fa fa-book margin-r-5"></i> Background info</strong>

                                                            <p class="text-muted">
                                                                This ward was started in 2014 to cater for ...........
                                                            </p>

                                                            <hr>

                                                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

                                                            <p class="text-muted">Nairobi East</p>

                                                            <hr>
                                                            <strong><i class="fa fa-user margin-r-5"></i>Population</strong>

                                                            <p class="text-muted">10m</p>

                                                            <hr>
                                                            <strong><i class="fa fa-database margin-r-5"></i>Challenges</strong>

                                                            <p>
                                                                <span class="label label-danger">Objective</span>
                                                                <span class="label label-success">Objective</span>
                                                                <span class="label label-info">Objective</span>
                                                                <span class="label label-warning">Objective</span>
                                                                <span class="label label-primary">Objective</span>
                                                            </p>

                                                            <hr>
                                                            <strong><i class="fa fa-list-alt margin-r-5"></i>Mode of transport</strong>

                                                            <p>
                                                                <span class="label label-danger">Activities</span>
                                                                <span class="label label-success">Activities</span>
                                                                <span class="label label-info">Activities</span>
                                                                <span class="label label-warning">Activities</span>
                                                                <span class="label label-primary">Activities</span>
                                                            </p>


                                                            <strong><i class="fa fa-line-chart margin-r-5"></i>Achievements</strong>

                                                            <p>
                                                                <span class="label label-danger">Achievements</span>
                                                                <span class="label label-success">Achievements</span>
                                                                <span class="label label-info">Achievements</span>
                                                                <span class="label label-warning">Achievements</span>
                                                                <span class="label label-primary">Achievements</span>
                                                            </p>




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
                    <!-- /.nav-tabs-custom -->
                </div>

            </div>
            <h3 class="box-title text-center">
                <dt>Events and Projects</dt>
            </h3>
            <div class="row">
                <div class="col-md-6">


                    <div class="box box-solid box-success">
                        <div class="box-header text-center">
                            <h3 class="box-title ">Events</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>Event</th>
                                    <th>Date</th>
                                    <th>Status</th>

                                </tr>
                                <tr>
                                    <td>Women in ICT Launch</td>
                                    <td>11-11-2016</td>
                                    <td><span class="label label-success">Upcoming</span></td>

                                </tr>
                                <tr>

                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-warning">Pending</span></td>

                                </tr>
                                <tr>

                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-primary">Approved</span></td>

                                </tr>
                                <tr>

                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-danger">Denied</span></td>

                                </tr>
                                <tr>

                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-danger">Denied</span></td>

                                </tr>
                                <tr>

                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-danger">Denied</span></td>

                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-solid box-success">
                        <div class="box-header text-center">
                            <h3 class="box-title ">Projects</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="box-group" id="accordion">
                                <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                <div class="panel box box-primary">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                Project #1
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="box-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                            single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                            of them accusamus
                                            labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-danger">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                Project #2
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="box-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                            single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                            of them accusamus
                                            labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel box box-success">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                Project #3
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="box-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3
                                            wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                            quinoa nesciunt laborum
                                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                            single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred
                                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer
                                            farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                                            of them accusamus
                                            labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer text-center">
                                <a href="profile/makina.html" class="uppercase">View All Projects</a>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>


                </div>

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            Developed by <a href="#">Mitchsofts</a>
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">Umande Trust</a>.</strong> All rights reserved.
    </footer>

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
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
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
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
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
