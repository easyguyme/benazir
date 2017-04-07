<!DOCTYPE html>
<html>
<?php include('header.php'); ?>
<link rel="stylesheet" href="weather/css/style.css">
<link rel="stylesheet" href="calendar/css/style.css">
<link rel="stylesheet" href="saa/css/style.css">
<link rel="stylesheet" href="testimony/css/style.css">
<body class="hold-transition skin-green sidebar-mini">
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.8/validator.js">
<div class="wrapper">
    <?php include('top.php'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include('sidebar.php'); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Women Voices, ICT Choices
                <small>Media</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">In the Media</li>
            </ol>
        </section>
<section class="content">

<div class="row">
    <div class="col-md-6">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"><dt>Weather</dt></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding ">
                <div class="loading"></div>

                <div id='top'>
                        <div id='location'>&nbsp</div>
                    </div>
                    <div id='middle'>
                        <div id='icon'>
                        </div>
                        <div id='temp'></div>
                    </div>
                    <div id='bottom'>
                        <div id='condition' class='under_icon'></div>
                        <div id='info'>
                            <div id='humidity' class='specs'>HUM: </div>
                            <div id='precipitation' class='specs'>PREC:
                            </div>
                            <div id='wind' class='specs'>WIND:
                            </div>
                        </div>

                    </div>
                </div>


                <div id='switcher'>
                    &deg F |  C&nbsp&nbsp
                    <label class="switch">
                        <input type="checkbox" id='please'>
                        <div class="slider round"></div>
                    </label></div>






                <!-- /.users-list -->
            </div>
            <!-- /.box-body -->
        <div class="box box-info">
            <div class="box-header">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">Feedback</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
                <?php
                require ('PHPMailer/PHPMailerAutoload.php');

                if(isset($_POST['submit'])) {

                    $email = $_POST["emailto"];
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
                    $mail->setFrom($email,"In the Media Page Feedback" );
//Set an alternative reply-to address
                    $mail->addReplyTo($email, "Dear Sir/Madam");
//Set who the message is to be sent to
                    $mail->addAddress("feedback@womenvoicesictchoices.org", "Umande Dashboard");
//Set the subject line
                    $mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
                    $mail->Body="Dear Admin you have a mail from Umande Dashboard Media Page!  "  .  "\n\n" . $message;
//Replace the plain text body with one created manually

//Attach an image file
                    // $mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
                    if (!$mail->send()) {
                        echo "Mailer Error: " . $mail->ErrorInfo;
                    } else {
                        echo '<p class="center" style="color: red">Mail Sent. Thank you ' . $email . ', we will contact you shortly.</p>';
                    }



                }

                ?>

            </div>
            <div class="box-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <input type="email" class="form-control" name="emailto" placeholder="Your mail:" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div>
                        <textarea class="textarea" name="message" placeholder="Your feedback" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required></textarea>
                    </div>

            </div>
            <div class="box-footer clearfix">
                <button type="submit" name="submit" class="pull-right btn btn-default" id="sendEmail">Send
                    <i class="fa fa-arrow-circle-right"></i></button>
            </div>
            </form>
        </div>
            <!-- /.box-footer -->
        </div>

    <div class="col-md-6">

        <date-widget theme="tertiary"></date-widget>
        <div class="calendar" id="calendar-app">
            <div class="calendar--day-view" id="day-view">
                <span class="day-view-exit" id="day-view-exit">&times;</span>
                <span class="day-view-date" id="day-view-date">MAY 29 2016</span>
                <div class="day-view-content">
                    <div class="day-highlight">
                        <span class="day-events" id="day-events"></span>. &nbsp; <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event" data-date>     </span>
                    </div>
                    <div class="day-add-event" id="add-day-event-box" data-active="false">
                        <div class="row">
                            <div class="half">
                                <label class="add-event-label">
                                    Name of event
                                    <input type="text" class="add-event-edit add-event-edit--long" placeholder="New event" id="input-add-event-name">

                                </label>
                            </div>
                            <div class="qtr">
                                <label class="add-event-label">
                                    Start Time
                                    <input type="text" class="add-event-edit" placeholder="8:15" id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
                                    <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-start-ampm" data-options="a,p,am,pm">
                                </label>
                            </div>
                            <div class="qtr">
                                <label class="add-event-label">
                                    End Time
                                    <input type="text" class="add-event-edit" placeholder="9" id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
                                    <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-end-ampm" data-options="a,p,am,pm">
                                </label>
                            </div>
                            <div class="half">
                                <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0" id="add-event-save" class="event-btn--save event-btn">save</a>
                                <a tabindex="0" id="add-event-cancel" class="event-btn--cancel event-btn">cancel</a>
                            </div>
                        </div>

                    </div>
                    <div id="day-events-list" class="day-events-list">

                    </div>
                    <div class="day-inspiration-quote" id="inspirational-quote">
                        Every child is an artist.  The problem is how to remain an artist once he grows up. –Pablo Picasso
                    </div>
                </div>
            </div>
            <div class="calendar--view" id="calendar-view">
                <div class="cview__month">
                    <span class="cview__month-last" id="calendar-month-last">Apr</span>
                    <span class="cview__month-current" id="calendar-month">May</span>
                    <span class="cview__month-next" id="calendar-month-next">Jun</span>
                </div>
                <div class="cview__header">Sun</div>
                <div class="cview__header">Mon</div>
                <div class="cview__header">Tue</div>
                <div class="cview__header">Wed</div>
                <div class="cview__header">Thu</div>
                <div class="cview__header">Fri</div>
                <div class="cview__header">Sat</div>
                <div class="calendar--view" id="dates">
                </div>
            </div>
            <div class="footer">
                <span><span id="footer-date" class="footer__link"></span></span>
            </div>
        </div>
    </div>

    </div>
    <div class="row">
        <div class="col-md-7">
<?php include('mgallery.php')?>
        </div>

        <div class="col-md-5">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title"><dt>Downloads and Publications</dt></h3>

                </div>
                <ul class="timeline">
                    <!-- timeline time label -->

                    <?php
                    $query = $conn->query("select * from downloads order by date desc limit 3");
                    while ($row = $query->fetch()) {

                    ?>
                    <li>
                        <i class="fa  fa-envelope bg-blue"></i>

                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#"><?php echo $row['name']; ?></a> <?php echo $row['sub']; ?></h3>

                            <div class="timeline-body">
                                <?php echo $row['des']; ?>
                            </div>
                            <div class="timeline-footer">
                                <a href="<?php echo $row['link']; ?>" class="btn  fa fa-download " target="_blank"> Download</a>

                            </div>
                        </div>
                    </li>
                    <?php } ?>
                    <!-- END timeline item -->
                    <!-- timeline item -->

                </ul>
            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-md-12">
            <div class="testimonials">

                <div class="block">

                    <h3>Testimonials</h3>
                    <h5>What people say about us</h5>

                </div>
                <?php
                $query = $conn->query("select * from testimony order by date DESC limit 5");
                while ($row = $query->fetch()) {

                ?>
                <blockquote class="block">

                    <p>"<?php echo $row['message']; ?>"</p>

                    <footer>
                        <cite><span><?php echo $row['name']; ?></span></cite>
                    </footer>

                </blockquote>

                <?php } ?>

            </div>



        </div>


    </div>



    <?php include('social.php'); ?>








</section>

    </div>
    <?php include('footer.php'); ?>
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
    <div class="control-sidebar-bg"></div>
</div>
<script src="weather/js/index.js"></script>
<script src="calendar/js/index.js"></script>
<?php include('hscripts.php'); ?>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="saa/js/index.js"></script>
</body>
</html>