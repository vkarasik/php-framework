<?php
use Fw\Core\Component\Base;
use Fw\Core\Component\Template;

class ElementList extends Base
{
    public function __construct($id, $template, $params, $path)
    {
        $this->id = $id;
        $this->params = $params;
        $this->path = $path;
        $this->template = new Template($path, $template);
    }

    public function executeComponent()
    {
        $arrResult = array(
            '0' => [
                'title' => 'Новость 1',
                'date' => '10.10.2022',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            ],
            '1' => [
                'title' => 'Новость 2',
                'date' => '11.10.2022',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            ],
            '2' => [
                'title' => 'Новость 3',
                'date' => '12.10.2022',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            ],
            '3' => [
                'title' => 'Новость 4',
                'date' => '13.10.2022',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            ],
        );
        $this->result = $arrResult;
        $this->template->render($this->params, $this->result);
    }
}
