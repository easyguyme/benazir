<?php
$query = $conn->query("select * from home where id=1");
while ($row = $query->fetch()) {

?>
<p>
    <?php echo $row['info']; ?>
</p>
    <a  class="btn  "id="read" style="color: green;" >Read More...</a>
<p id="hidden" hidden>
    <?php echo $row['remo']; ?>
</p>



<?php }?>
