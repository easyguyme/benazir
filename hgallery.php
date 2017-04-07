<div class="col-md-6">
    <div class="box box-danger">
        <div class="box-header with-border" style="text-align: center;">
            <?php
            $query = $conn->query("select * from hgallery where id=1");
            while ($row = $query->fetch()) {

            ?>
            <h3 class="box-title"><dt> <?php echo $row['maintitle']; ?></dt></h3>
            <?php } ?>
        </div>
        <!-- /.box-header -->
        <style>


            .carousel-inner>.item>img, .carousel-inner>.item>a>img
            {
                height:300px;
                width:700px;
            }

        </style>
        <?php




        $query = $conn->query("select * from hgallery order by date desc") or die(mysql_error());
        $count = $query->rowcount();
        $slides='';
        $Indicators='';
        $counter=0;

        while ($row = $query->fetch())
        {

            $title = $row['title'];
            $desc = $row['descp'];
            $image = $row['image'];
            if($counter == 0)
            {
                $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'" class="active"></li>';
                $slides .= '<div class="item active">
            <img src="admin/gallery/' .$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';

            }
            else
            {
                $Indicators .='<li data-target="#carousel-example-generic" data-slide-to="'.$counter.'"></li>';
                $slides .= '<div class="item">
            <img src="admin/gallery/' .$image.'" alt="'.$title.'" />
            <div class="carousel-caption">
              <h3>'.$title.'</h3>
              <p>'.$desc.'.</p>
            </div>
          </div>';
            }
            $counter++;
        }

        ?>
        <div class="box-body">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php echo $Indicators; ?>
                </ol>
                <div class="carousel-inner">
                    <?php echo $slides; ?>
                </div>

                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="fa fa-angle-right"></span>
                </a>
            </div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</div>