<?php
$params = $this->component->params;
$result = $this->component->result;
$type = $params['type'];
$name = $params['name'];
$id = hrtime(true);
$class = isset($params['additional_class']) ? $params['additional_class'] : '';
$title = isset($params['title']) ? $params['title'] : '';
$attr = isset($params['attr']) ? getAttr($params['attr']) : '';
$min = isset($params['min']) ? $params['min'] : '';
$max = isset($params['max']) ? $params['max'] : '';
$default = isset($params['default']) ? $params['default'] : '';
?>
<div class="mb-3">
    <label for="<?=$id?>" class="form-label"><?=$title?></label>
    <input type="<?=$type?>" name="<?=$name?>" class="form-control <?=$class?>" min="<?=$min?>" max="<?=$max?>" id="<?=$id?>" <?=$attr?> placeholder="<?=$default?>">
</div>
