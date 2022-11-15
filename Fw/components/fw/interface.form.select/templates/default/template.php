<?php
$params = $this->component->params;
$result = $this->component->result;
$name = $params['name'];
$id = hrtime(true);
$class = isset($params['additional_class']) ? $params['additional_class'] : '';
$title = isset($params['title']) ? $params['title'] : '';
$attr = isset($params['attr']) ? getAttr($params['attr']) : '';
$multiple = isset($params['multiple']) && $params['multiple'] ? 'multiple' : '';
?>
<div class="mb-3">
    <label class="form-label" for="<?=$id?>"><?=$title?></label>
    <select class="form-select <?=$class?>" name="<?=$name?>" id="<?=$id?>" <?=$attr?> <?=$multiple?>>
        <?php foreach ($params['list'] as $option): ?>
            <?php
            $title = $option['title'];
            $value = $option['value'];
            $class = isset($option['additional_class']) ? $option['additional_class'] : '';
            $selected = isset($option['selected']) ? 'selected' : '';
            $attr = isset($option['attr']) ? getAttr($option['attr']) : '';
            ?>
        <option class="<?=$class?>" value="<?=$value?>" <?=$selected?> <?=$attr?>><?=$title?></option>
        <?php endforeach;?>
    </select>
</div>
