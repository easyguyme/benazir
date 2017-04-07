<div class="col-md-6">
    <div class="box box-success">
        <div class="box-header with-border">
            <i class="fa fa-quote-left"></i>

            <h3 class="box-title">Today's Quote</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body clearfix">
            <?php
            $query = $conn->query("select neno,who  from quotes ORDER BY RAND() LIMIT 1");
            while ($row = $query->fetch()) {
            ?>
            <blockquote >

                <p><i class="fa fa-quote-left "></i> <?php echo $row['neno']; ?><i class="fa fa-quote-right "></i></p>

                <small><?php echo $row['who']; ?></small>
                <?php } ?>
            </blockquote>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>