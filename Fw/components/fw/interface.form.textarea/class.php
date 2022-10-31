<?php
use Fw\Core\Component\Base;

class InterfaceFormTextarea extends Base
{
    public function __construct($id, $template, $params, $path)
    {
        parent::__construct($id, $template, $params, $path);
    }

    public function executeComponent()
    {
        $arrResult = array();
        $this->result = $arrResult;
        $this->template->render();
    }
}
