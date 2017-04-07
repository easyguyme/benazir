<header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>UT</b>D</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Umande</b>Trust</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->

                <!-- Notifications: style can be found in dropdown.less -->

                <!-- Tasks: style can be found in dropdown.less -->
                <?php

                $user_query = $conn->query("select * from registration where email = '$session_id'")or die(mysql_error());
                $row = $user_query->fetch();

                ?>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../dist/img/<?php echo $row['image'];?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $row['fname']." ".$row['sname'];  ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="../dist/img/<?php echo $row['image'];?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $row['fname']." ".$row['sname'];  ?> - Web Admin
                                <small>Admin since <?php echo $row['registration_date'];?></small>
                            </p>

                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <a href="#"></a>
                                </div>
                                <div class="col-xs-4 text-red">
                                    <a href="#userav" data-toggle="modal" data-target="#userav" class="btn btn-info">Change Image</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <a href="#"></a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="change_pass.php" class="btn btn-warning ">Change Password</a>
                            </div>

                            <div class="pull-right">
                                <a href="logout.php" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>

    </nav>
</header>
