<?php
use Fw\Core\Application;
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
                    $template = isset($element['template']) ? $element['template'] : 'default';
                    Application::getInstance()->includeComponent(
                        'fw:interface.form.' . $type,
                        $template,
                        $element
                    );
                ?>
            <?php endforeach;?>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
    </div>
</div>
