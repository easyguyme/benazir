<h2 class="page-header text-center"><dt>OUR PARTNERS</dt></h2>
<div class="box-default">
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('../scroller/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>


        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden;">
            <?php
            $query = $conn->query("select * from partners");
            while ($row = $query->fetch()) {

                ?>
                <div style="display: none;">
                    <img data-u="image" src="../scroller/img/<?php echo $row['image']; ?>" />
                </div>
            <?php } ?>
        </div>

    </div>
</div>