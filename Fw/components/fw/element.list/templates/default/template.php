<?php
$limit = $params["limit"];
$count = 0;
?>
<div>
    <h2>Component</h2>
    <?php while ($count < $limit && isset($result[$count])): ?>
    <?php if ($params["show_title"] == "Y"): ?>
        <h3><?=$result[$count]["title"]?></h3>
    <?php endif;?>
        <p><?=$result[$count]["body"]?></p>
        <span><?=$result[$count]["date"]?></span>
    <?php $count++;?>
    <?php endwhile;?>
</div>
