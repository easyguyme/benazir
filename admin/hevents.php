

<div class="box box-success">
    <div class="box-header with-border" style="text-align: center;">
        <?php
        $query = $conn->query("select * from hevents");
        while ($row = $query->fetch()) {
            ?>
            <h3 class="box-title"> <strong><?php echo $row['title']; ?></strong></dt></h3>
        <?php } ?>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <!-- /.box-header -->

    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
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
                $id = $row['id'];
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
    <!-- /.box-body -->
</div>

<?php include('dbcon.php'); ?>