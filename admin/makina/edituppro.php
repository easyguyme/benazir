<?php  include('session.php'); ?>
<?php include('header.php'); ?>
<!-- daterange picker -->
<?php include('extra.php'); ?>
<!-- Makina county complete projects -->
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
            <div class="col-md-6">
                <?php include('edit_uppro.php'); ?>

            </div>
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="box-header with-border">
                                <h3 class="box-title">View planned Projects</h3>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="delete_uppro.php" method="post">
                                        <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                            <a data-toggle="modal" href="#plandelete" id="delete"  class="btn btn-sm btn-danger">Delete</a>
                                            <?php include('modal_delete.php'); ?>
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th>Project name</th>
                                                <th>Project description</th>
                                                <th>Budget(Ksh.)</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $query = $conn->query("select * from planned where page='makina' ");
                                            while ($row = $query->fetch()) {
                                                $id = $row['id'];
                                                ?>

                                                <tr>
                                                    <td width="30">
                                                        <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                    </td>
                                                    <td><?php echo $row['name']; ?></td>

                                                    <td><?php echo $row['des']; ?></td>
                                                    <td><?php echo $row['budget']; ?> M.</td>

                                                    <td width="30"><a href="edituppro.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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
<?php include('logo_modal.php'); ?>

