<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="fa fa-facebook"></i></span>
            <?php
            $query = $conn->query("select * from social where account='facebook'");
            while ($row = $query->fetch()) {

            ?>
            <div class="info-box-content">
                <span class="info-box-text"> <a href="<?php echo $row['link']; ?>">On Facebook?</a></span>
                <span class="info-box-number"> <a href="<?php echo $row['link']; ?>">Like Us</a></span>
            </div>
            <?php }?>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-teal"><i class="fa fa-twitter"></i></span>
            <?php
            $query = $conn->query("select * from social where account='twitter'");
            while ($row = $query->fetch()) {

                ?>
                <div class="info-box-content">
                    <span class="info-box-text"> <a href="<?php echo $row['link']; ?>">On Twitter?</a></span>
                    <span class="info-box-number"> <a href="<?php echo $row['link']; ?>">Follow Us</a></span>
                </div>
            <?php }?>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg"><i class="fa fa-instagram"></i></span>
            <?php
            $query = $conn->query("select * from social where account='instagram'");
            while ($row = $query->fetch()) {

                ?>
                <div class="info-box-content">
                    <span class="info-box-text"> <a href="<?php echo $row['link']; ?>">On Instagram?</a></span>
                    <span class="info-box-number"> <a href="<?php echo $row['link']; ?>">Follow Us</a></span>
                </div>
            <?php }?>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red-active"><i class="fa fa-youtube"></i></span>
            <?php
            $query = $conn->query("select * from social where account='youtube'");
            while ($row = $query->fetch()) {

                ?>
                <div class="info-box-content">
                    <span class="info-box-text"> <a href="<?php echo $row['link']; ?>">On Youtube?</a></span>
                    <span class="info-box-number"> <a href="<?php echo $row['link']; ?>">Subcribe</a></span>

                </div>
            <?php }?>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>