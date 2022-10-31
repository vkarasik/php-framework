<?php
$params = $this->component->params;
$result = $this->component->result;
$limit = $params["limit"];
$count = 0;
?>
<div>
    <h2 class="display-4 mb-4">Element List Component</h2>
    <div class="row mb-5">
        <?php while ($count < $limit && isset($result[$count])): ?>
            <div class="col-3">
            <?php if ($params["show_title"] == "Y"): ?>
                <h3><?=$result[$count]["title"]?></h3>
            <?php endif;?>
                <p><?=$result[$count]["body"]?></p>
                <span><?=$result[$count]["date"]?></span>
            <?php $count++;?>
        </div>
        <?php endwhile;?>
    </div>
</div>
