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
        <?php include('mgallery.php')?>
    </div>

    <div class="col-md-6">
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


    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <i class="fa fa-comment"></i>
                    <h3 class="box-title"><dt>Our Stories</dt></h3>

                </div>
                <div class="box-body">
                    <?php
                    $query = $conn->query("select * from stories order by date desc limit 3");
                    while ($row = $query->fetch()) {

                    ?>
                <div class="attachment-block clearfix">
                    <img class="attachment-img" src="<?php echo $row['img']; ?>" alt="Attachment Image">

                    <div class="attachment-pushed">
                        <h4 class="attachment-heading"><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['head']; ?></a></h4>

                        <div class="attachment-text">
                            <?php echo $row['description']; ?>...<a href="<?php echo $row['link']; ?>" target="_blank">read more</a>
                        </div>
                        <!-- /.attachment-text -->
                    </div>
                    <!-- /.attachment-pushed -->
                </div>
                <!-- /.attachment-block -->
                    <?php } ?>

                </div>
            </div>

        </div>

        <div class="col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <i class="fa fa-download"></i>
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

                            <h3 class="timeline-header"><a href="<?php echo $row['link']; ?>" target="_blank"><?php echo $row['named']; ?></a> <?php echo $row['sub']; ?></h3>

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

    <div class="control-sidebar-bg"></div>
</div>


<?php include('hscripts.php'); ?>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

<script src="saa/js/index.js"></script>
</body>
</html>