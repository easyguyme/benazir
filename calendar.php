<!DOCTYPE html>
<html>
<link rel="stylesheet" href="weather/css/style.css">
<link rel="stylesheet" href="calendar/css/style.css">
<link rel="stylesheet" href="saa/css/style.css">
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
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
                Women Voices, ICT Choices
                <small>Version 1.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Calendar</li>
            </ol>
        </section>
        <!-- Main content -->
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
                            <span><span id="footer-date" class="footer__link">click</span></span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Events</dt></h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                            </div>
                        </div>

                        <div class="box-body table-responsive">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">

                                <thead>
                                <tr>

                                    <th>Event</th>
                                    <th>Venue</th>
                                    <th>Start date</th>
                                    <th>End date</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = $conn->query("select * from hevents ORDER BY tarehes DESC ");
                                while ($row = $query->fetch()) {

                                    ?>
                                    <tr>

                                        <td><?php echo $row['event']; ?></td>
                                        <td><?php echo $row['venue']; ?></td>
                                        <td><?php echo $row['sdate']; ?></td>
                                        <td><?php echo $row['edate']; ?></td>
                                        <td><span class="label label-success"><?php echo $row['status']; ?></span></td>


                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>

                        </div>


                    </div>
                    <!-- /. box -->
                </div>

                    <?php include('hgallery.php');?>
                    <!-- /. box -->
                
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include('footer.php');?>

    <!-- Control Sidebar -->

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
<!-- jQuery UI 1.11.4 -->

<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->


<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "lengthMenu": [[3, 10, 20, -1], [3, 10, 20, "All"]],
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true
        });





    });
</script>
<script src="weather/js/index.js"></script>
<script src="calendar/js/index.js"></script>
<script src="saa/js/index.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
</body>
</html>
