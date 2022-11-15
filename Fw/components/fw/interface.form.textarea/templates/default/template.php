<?php
$params = $this->component->params;
$result = $this->component->result;
$name = $params['name'];
$id = hrtime(true);
$class = isset($params['additional_class']) ? $params['additional_class'] : '';
$title = isset($params['title']) ? $params['title'] : '';
$attr = isset($params['attr']) ? getAttr($params['attr']) : '';
?>
<div class="mb-3">
    <label class="form-label" for="<?=$id?>"><?=$title?></label>
    <textarea class="form-control <?=$class?>" id="<?=$id?>" name="<?=$name?>" rows="3" <?=$attr?>></textarea>
</div>
