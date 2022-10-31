<?php
$params = $this->component->params;
$result = $this->component->result;
function getAttr($arr)
{
    if (is_array($arr)) {
        $str = '';
        foreach ($arr as $key => $val) {
            $str .= "$key=$val" . " ";
        }
        return $str;
    }
}
?>
<div class="row align-items-center mb-4">
    <h2 class="display-4 mb-4">Form Component</h2>
    <div class="col-3">
        <form action="<?=$params['action']?>" method="<?=$params['method']?>" class="<?=$params['additional_class']?>" <?php getAttr($params['attr']);?>>
            <?php foreach ($params['elements'] as $key => $element): ?>
                <?php
                $type = $element['type'];
                $name = $element['name'];
                $id = $element['name'] . '_' . $key;
                $class = isset($element['additional_class']) ? $element['additional_class'] : '';
                $title = isset($element['title']) ? $element['title'] : '';
                $default = isset($element['default']) ? $element['default'] : '';
                $attr = isset($element['attr']) ? getAttr($element['attr']) : '';
                $min = isset($element['min']) ? $element['min'] : '';
                $max = isset($element['max']) ? $element['max'] : '';
                $multiple = isset($element['multiple']) && $element['multiple'] ? 'multiple' : '';
                ?>
                <?php if ($type == 'text' || $type == 'password'): ?>
                    <div class="mb-3">
                        <label for="<?=$id?>" class="form-label"><?=$title?></label>
                        <input type="<?=$type?>" name="<?=$name?>" class="form-control <?=$class?>" id="<?=$id?>" <?=$attr;?> placeholder="<?=$default?>">
                    </div>
                <?php elseif ($type == 'number'): ?>
                    <div class="mb-3">
                        <label for="<?=$id?>" class="form-label"><?=$title?></label>
                        <input type="<?=$type?>" name="<?=$name?>" class="form-control <?=$class?>" min="<?=$min?>" max="<?=$max?>" id="<?=$id?>" <?=$attr;?> placeholder="<?=$default?>">
                    </div>
                <?php elseif ($type == 'checkbox' || $type == 'radio'): ?>
                    <div class="form-check mb-3">
                        <input class="form-check-input <?=$class?>" type="<?=$type?>" value="Y" name="<?=$name?>" id="<?=$id?>" <?=$attr?>>
                        <label class="form-check-label" for="<?=$id?>"><?=$title?></label>
                    </div>
                <?php elseif ($type == 'select'): ?>
                    <div class="mb-3">
                        <label class="form-label" for="<?=$id?>"><?=$title?></label>
                        <select class="form-select <?=$class?>" name="<?=$name?>" id="<?=$id?>" <?=$attr?> <?=$multiple?>>
                            <?php foreach ($element['list'] as $option): ?>
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
                    <?php elseif ($type == 'textarea'): ?>
                    <div class="mb-3">
                        <label class="form-label" for="<?=$id?>"><?=$title?></label>
                        <textarea class="form-control <?=$class?>" id="<?=$id?>" name="<?=$name?>" rows="3"></textarea>
                    </div>
                <?php endif;?>
            <?php endforeach;?>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</div>
