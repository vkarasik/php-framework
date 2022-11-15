<?php
$params = $this->component->params;
$result = $this->component->result;
$type = $params['type'];
$name = $params['name'];
$id = hrtime(true);
$class = isset($params['additional_class']) ? $params['additional_class'] : '';
$title = isset($params['title']) ? $params['title'] : '';
$attr = isset($params['attr']) ? getAttr($params['attr']) : '';
?>
<div class="form-check mb-3">
    <input class="form-check-input <?=$class?>" type="<?=$type?>" value="Y" name="<?=$name?>" id="<?=$id?>" <?=$attr?>>
    <label class="form-check-label" for="<?=$id?>"><?=$title?></label>
</div>
