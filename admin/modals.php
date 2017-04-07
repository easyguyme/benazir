<div id="makinachampdel" class="modal  fade modal-sm" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Delete Champion?</h3>
    </div>
    <div class="modal-body">
        <div class="alert alert-danger">
            <p>Are you sure you want to delete the Champion you checked?.</p>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
        <button name="deletechamp" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
    </div>
</div>


<div class="modal example-modal" id="pdMakina" role="dialog">
    <div class="modal modal-primary">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Update Project Info</h4>
                </div>
                <div class="modal-body">
                    <?php
                    $query = $conn->query("select * from pdes where page='makina'");
                    while ($row = $query->fetch()) {

                    ?>
                    <form method="post" action="pagedes.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Heading" value="<?php echo $row['head']; ?>"required>
                        </div>
                        <p>Input the description you want users to see before clicking read more</p>
                        <div class="form-group" >
                            <textarea  name="info" placeholder="Project Info" style="width: 100%; height: 125px;color: #00a7d0; font-size: 14px;" ><?php echo $row['des']; ?></textarea>
                        </div>

                        <?php }?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-info" name="makdes"><i class="icon-save icon-large"></i> Save</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>