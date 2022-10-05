<?php

/**
 * Application Class
 */

namespace Fw\Core;

class Application
{
    private $__components = [];
    public $pager = null;
    private $template = null;

    use \Fw\Core\Traits\Singleton;

    private function __construct()
    {
        $this->pager = Page::getInstance();
    }


    public function header()
    {
        $this->startBuffer();
        require 'Fw/templates/manao/header.php';
    }

    public function footer()
    {
        require 'Fw/templates/manao/footer.php';
        $this->endBuffer();
    }

    private function startBuffer()
    {
        ob_start();
    }

    private function endBuffer()
    {
        $content = ob_get_contents();
        $this->restartBuffer();
        preg_match_all('/(#[a-zA-Z0-9_]+#)/', $content, $arr_mac);
        echo $this->pager->getAllReplace($arr_mac[0], $content);
    }

    private function restartBuffer()
    {
        ob_end_clean();
    }
}
