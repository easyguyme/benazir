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

                    <div class="col-md-6" id="profile" >
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title"><dt>Women Champions</dt></h3>

                            <div class="box-tools pull-right">
                                <?php

                                $query = $conn->query("select * from profiles where page='makina'") or die(mysql_error());
                                $count = $query->rowcount();


                                ?>

                                <span class="label label-danger"><?php  echo $count;  ?> Champions</span>

                                </button>

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <ul class="users-list clearfix">

                                <?php

                                $query = $conn->query("select * from profiles where page='makina'") or die(mysql_error());
                                while ($row = $query->fetch()) {


                                ?>
                                <li>
                                    <img src="../makina/champs/<?php echo $row['image']; ?>" alt="User Image">
                                    <a class="users-list-name" href="#"><?php echo $row['jina']; ?></a>
                                    <span class="users-list-date"><?php echo $row['age']; ?> Years</span>
                                </li>
                                                        <?php }?>
                            </ul>
                            <!-- /.users-list -->
                        </div>
                        <!-- /.box-body -->

                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>

                <div class="col-md-6">
                    <div class="box box-info">
                        <a href="#edit" class="btn  btn-danger">Click to edit Update women champions</a>

                        <div class="box-header with-border">


                        </div>
                        <!-- main header title -->


                        <!-- content -->
                        <form method="post" class="form-horizontal" enctype="multipart/form-data">

                            <div class="box-body">

                                <div class="form-group">

                                    <label for="name" class="col-sm-2 control-label">Name:</label>

                                    <div class="col-sm-10 input-sm">

                                        <input type="text" name="name" class="form-control " id="title" placeholder="Name"  required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="type" class="col-sm-2 control-label">Age:</label>

                                    <div class="col-sm-10 input-sm">
                                        <input type="text" name="age" class="form-control" id="desc" placeholder="Age of the woman champion" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="who" class="col-sm-2 control-label">Image upload:</label>
                                    <div class="col-sm-10 input-sm">
                                        <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                                    </div>


                                    <p class="help-block">Click to upload image.</p>
                                </div>


                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">

                                <button name="save" class="btn btn-info">Add</button>

                            </div>
                            <!-- /.box-footer -->
                        </form>

                    </div>

                </div>

            </div>


            <div class="row" id="edit">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="row-fluid">
                            <!-- block -->
                            <div id="block_bg" class="block">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Edit Uploaded Champions</h3>
                                </div>
                                <div class="block-content collapse in">
                                    <div class="span12">
                                        <form method="post" action="delchamps.php" >
                                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
                                                <a data-toggle="modal" href="#makinachampdel" id="delete"  class="btn btn-sm btn-danger">Delete</a>

                                                <?php include('modals.php'); ?>
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Image Name</th>
                                                    <th>Date Uploaded</th>
                                                    <th></th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                <?php
                                                $query = $conn->query("select * from profiles where page='makina' order by date desc");
                                                while ($row = $query->fetch()) {
                                                    $id = $row['id'];
                                                    ?>

                                                    <tr>
                                                        <td width="30">
                                                            <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                                        </td>
                                                        <td><?php echo $row['jina']; ?></td>
                                                        <td><?php echo $row['age']; ?></td>
                                                        <td><?php echo $row['image']; ?></td>
                                                        <td><?php echo $row['date']; ?></td>
                                                        <td width="30"><a href="editmakchamps.php<?php echo '?id='.$id; ?>" class="btn btn-sm btn-success">Edit</a></td>


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
    $name = $_POST['name'];
    $age = $_POST['age'];
    $page='makina';

    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);

    move_uploaded_file($_FILES["image"]["tmp_name"], "../makina/champs/" . $_FILES["image"]["name"]);
    $location =  $_FILES["image"]["name"];



    $conn->query("insert into profiles (jina,age,image,page) values('$name','$age','$location','$page')")or die(mysql_error());

    ?>
    <script>
        window.location = "makina_champs.php";
    </script>
    <?php

}
?>