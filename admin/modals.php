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
                    <h4 class="modal-title">Update Area Profile Table</h4>
                </div>
                <div class="modal-body">
                    <?php
                    $query = $conn->query("select * from profile_tbl where page='makina'");
                    while ($row = $query->fetch()) {

                    ?>

                        <form method="post" action="pagedes.php">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="area" class="control-label">Area:</label>

                                    <div  input-sm">
                                        <input type="text" name="area" class="form-control" id="area" placeholder="Area" value="<?php echo $row['area']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="population" class=" control-label">Population:</label>

                                    <div class=" input-sm">
                                        <input type="text" name="population" class="form-control" id="population" placeholder="Population" value="<?php echo $row['population']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="village" class=" control-label">Villages:</label>

                                    <div class=" input-sm">
                                        <input type="text" name="village" class="form-control" id="village" placeholder="No. of Villages" value="<?php echo $row['village']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fund" class=" control-label">Fund:</label>

                                    <div class=" input-sm">
                                        <input type="text" name="fund" class="form-control" id="fund" placeholder="Fund Amount" value="<?php echo $row['fund']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mca" class=" control-label">MCA:</label>

                                    <div class=" input-sm">
                                        <input type="text" name="mca" class="form-control" id="mca" placeholder="Mca Name" value="<?php echo $row['mca']; ?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="admin" class=" control-label">Ward Admin:</label>

                                    <div class=" input-sm">
                                        <input type="text" name="admin" class="form-control" id="admin" placeholder="Mca Name" value="<?php echo $row['admin']; ?>" required>
                                    </div>
                                </div>
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
