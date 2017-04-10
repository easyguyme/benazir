<div class="info-box bg-purple">
    <span class="info-box-icon"><i class="fa fa-map-marker"></i></span>
    <?php
    $query = $conn->query("select * from hlocation where id=1");
    while ($row = $query->fetch()) {
    $id = $row['id'];
    ?>
    <div class="info-box-content">

        <span class="info-box-number"><?php echo $row['name']; ?></span>
        <span class="info-box-text">Location:<?php echo $row['linfo']; ?></span>
        <span class="info-box-text">Contact:<?php echo $row['description']; ?></span>

        <?php } ?>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
<div class="info-box bg-green">
    <span class="info-box-icon"><i class="fa fa-map-marker"></i></span>
    <?php
    $query = $conn->query("select * from hlocation where id=2");
    while ($row = $query->fetch()) {
    $id = $row['id'];
    ?>
    <div class="info-box-content">

        <span class="info-box-number"><?php echo $row['name']; ?></span>
        <span class="info-box-text">Name:<?php echo $row['linfo']; ?></span>
        <span class="info-box-text">Location:<?php echo $row['description']; ?></span>

        <?php } ?>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
<div class="info-box bg-blue">
    <span class="info-box-icon"><i class="fa fa-map-marker"></i></span>
    <?php
    $query = $conn->query("select * from hlocation where id=3");
    while ($row = $query->fetch()) {
    $id = $row['id'];
    ?>
    <div class="info-box-content">

        <span class="info-box-number"><?php echo $row['name']; ?></span>
        <span class="info-box-text">Name:<?php echo $row['linfo']; ?></span>
        <span class="info-box-text">Location:<?php echo $row['description']; ?></span>

        <?php } ?>
    </div>
    <!-- /.info-box-content -->
</div>
<!-- /.info-box -->
<div class="info-box bg-aqua">
    <span class="info-box-icon"><i class="fa fa-map-marker"></i></span>
    <?php
    $query = $conn->query("select * from hlocation where id=4");
    while ($row = $query->fetch()) {
    $id = $row['id'];
    ?>
    <div class="info-box-content">

        <span class="info-box-number"><?php echo $row['name']; ?></span>
        <span class="info-box-text">Name:<?php echo $row['linfo']; ?></span>
        <span class="info-box-text">Location:<?php echo $row['description']; ?></span>

        <?php } ?>
    </div>
    <!-- /.info-box-content -->
</div>