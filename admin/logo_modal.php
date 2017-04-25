<div id="myModal" class="modal fade modal-primary" role="dialog" xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Home Page Logo</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="save_logo.php" enctype="multipart/form-data">
                    <center>
                        <div class="control-group">
                            <div class="controls">
                                <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                            </div>
                        </div>
                    </center>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" name="change"><i class="icon-save icon-large"></i> Save</button>
            </div>
        </div>
</form>
    </div>
</div>
<!--                                        -->

<div id="pdModals" class="modal modal-warning" role="dialog" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Home Page Logo</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="sidebar.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Heading" "required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" name="changes"><i class="icon-save icon-large"></i> Save</button>
            </div>

        </div>

    </div>
</div>

<div class="modal example-modal" id="pdModal" role="dialog">
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
                    $query = $conn->query("select * from home where id=1");
                    while ($row = $query->fetch()) {

                    ?>
                    <form method="post" action="updatepd.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" placeholder="Heading" value="<?php echo $row['title']; ?>"required>
                        </div>
                        <p>Input the description you want users to see before clicking read more</p>
                        <div>
                            <textarea class="textarea" name="info" placeholder="Project Info" style="width: 100%; height: 125px;color: #00a7d0; font-size: 14px; line-height: 18px; border: 1px solid #0a2b1d; padding: 10px;" ><?php echo $row['info']; ?>"</textarea>
                        </div>
                        <p>Input the description you want users to see after clicking read more</p>
                        <div>
                            <textarea class="textarea" name="remo" placeholder="ReadMore" style="width: 100%; height: 125px;color: #00a7d0; font-size: 14px; line-height: 18px; border: 1px solid #0a2b1d; padding: 10px;" ><?php echo $row['remo']; ?></textarea>
                        </div>
                        <?php }?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button class="btn btn-info" name="changez"><i class="icon-save icon-large"></i> Save</button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</div>


<!--  Social modal -->
<div id="youtube" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Update Youtube Link?</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="save_social.php">
            <?php
            $query = $conn->query("select * from social where account ='youtube'");
            while ($row = $query->fetch()) {

                ?>
                <div class="form-group col-sm-10">
                    <label>Link:</label>

                    <div class="input-group  col-sm-8">

                        <input type="url" name="youtubes" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
                    </div>

                </div>
            <?php }?>


    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
        <button name="youtube" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
    </div>
    </form>
</div>
<div id="instagram" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Update Instagram Link?</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="save_social.php">
            <?php
            $query = $conn->query("select * from social where account ='instagram'");
            while ($row = $query->fetch()) {

                ?>
                <div class="form-group col-sm-10">
                    <label>Link:</label>

                    <div class="input-group  col-sm-8">

                        <input type="url" name="instagrams" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
                    </div>

                </div>
            <?php }?>


    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
        <button name="instagram" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
    </div>
    </form>
</div>
<div id="facebook" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Update Facebook Link?</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="save_social.php">
            <?php
            $query = $conn->query("select * from social where account ='facebook'");
            while ($row = $query->fetch()) {

                ?>
                <div class="form-group col-sm-10">
                    <label>Link:</label>

                    <div class="input-group  col-sm-8">

                        <input type="url" name="facebooks" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
                    </div>

                </div>
            <?php }?>


    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
        <button name="facebook" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
    </div>
    </form>
</div>
<div id="twitter" class="modal  fade modal-primary modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
        <h3 id="myModalLabel">Update Twitter Link?</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="save_social.php">
            <?php
            $query = $conn->query("select * from social where account ='twitter'");
            while ($row = $query->fetch()) {

                ?>
                <div class="form-group col-sm-10">
                    <label>Link:</label>

                    <div class="input-group  col-sm-8">

                        <input type="url" name="twitters" class="form-control" id="event" placeholder="Publication Heading" value="<?php echo $row['link']; ?>" required>
                    </div>

                </div>
            <?php }?>


    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> No</button>
        <button name="twitter" class="btn btn-danger"><i class="icon-check icon-large"></i> Yes</button>
    </div>
    </form>
</div>


<div id="userav" class="modal fade modal-info" role="dialog" xmlns="http://www.w3.org/1999/html">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Do you want to change your Avatar?</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="save_avi.php" enctype="multipart/form-data">
                    <center>
                        <div class="control-group">
                            <div class="controls">
                                <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                            </div>
                        </div>
                    </center>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" name="avatar"><i class="icon-save icon-large"></i> Save</button>
            </div>
        </div>
        </form>
    </div>
</div>



