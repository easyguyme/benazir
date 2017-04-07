<div class="box box-success">
    <div class="box-header with-border">
        <?php
        $query = $conn->query("select * from hmap");
        while ($row = $query->fetch()) {

        ?>
        <h3 class="box-title text-center"><strong><?php echo $row['title']; ?></strong></h3>


    </div>
    <!-- /.box-header -->
    <div class="box-body no-padding">
        <div class="row">
            <div class="">

                <div class="pad"  >

                    <!-- Map will be created here -->
                    <iframe src=<?php echo $row['url']; ?> width="640" height="480"></iframe>
                </div>
                <?php } ?>
            </div>
            <!-- /.col -->

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>