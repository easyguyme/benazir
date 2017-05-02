<?php  include('session.php'); ?>
<?php include('header.php'); ?>
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
                <div class="col-md-2">


                </div>
                <div class="col-md-8">
                    <div class="box box-info">
                        <div class="box-header with-border">

                            <h3 class="box-title">Add Quotes</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form method="post" class="form-horizontal" id="quoteForm">

                            <div class="box-body">


                                <div class="form-group">
                                    <label for="who" class="col-sm-2 control-label">By who?:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="who" class="form-control" id="who" placeholder="By who" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="quote" class="col-sm-2 control-label">Quote:</label>

                                    <div class="col-sm-10 ">
                                        <textarea class="textarea" name="neno" id="neno" form="quoteForm"  placeholder="Quote" style="width: 100%; height: 70px;color: #00a7d0; font-size: 14px; line-height: 18px; border: 1px solid #0a2b1d; padding: 10px;"></textarea>
                                    </div>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="save" class="btn btn-success">Save</button>
                            </div>
                            <!-- /.box-footer -->
                        </form>
                    </div>

                </div>
                <div class="col-md-2">


                </div>
            </div>
            <!--third row-->
            <div class="row" id="edit">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="row-fluid">
                            <!-- block -->
                            <div id="block_bg" class="block">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Uploaded Pics</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form action="del_quote.php" method="post">
                                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">


                                                <?php include('modal_delete.php'); ?>
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Quote</th>
                                                    <th>By</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from quotes");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['id'];
                                                    ?>

                                                    <tr>
                                                        <td width="30">
                                                            <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                        </td>
                                                        <td><?php echo $row['neno']; ?></td>
                                                        <td><?php echo $row['who']; ?></td>

                                                        <td width="30"><a data-toggle="modal" href="#delquote" id="delete"  class="btn btn-sm btn-danger">Delete</a></td>


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
                <!--third row-->



        </section>


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


<script type="text/javascript">
    $("#read").click(function() {

        $("#hidden").show();
        $("#read").hide();

    });

</script>
</body>
</html>


<?php
include('dbcon.php');
if (isset($_POST['save'])){
    $who = $_POST['who'];
    $neno = $_POST['neno'];




    $query="insert into quotes (neno,who) VALUES (:neno,:who)";


    $stmt=$conn->prepare($query);
    $stmt->bindParam(':neno', $_POST['neno'], PDO::PARAM_STR);
    $stmt->bindParam(':who', $_POST['who'], PDO::PARAM_STR);
    $stmt->execute();




    ?>
    <script>
        window.location = "home.php";
    </script>
    <?php

}
?>