<?php

/**
 * Application Class
 */

namespace Fw\Core;

use Fw\Core\Type\Request;
use Fw\Core\Type\Server;

class Application
{
    private $__components = [];
    public $pager = null;
    private $template = null;
    private $request = null;
    private $server = null;

    use \Fw\Core\Traits\Singleton;

    private function __construct()
    {
        $this->pager = Page::getInstance();
        $this->request = new Request();
        $this->server = new Server();
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
        echo $this->pager->getAllReplace($content);
    }

    private function restartBuffer()
    {
        ob_end_clean();
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getServer()
    {
        return $this->server;
    }
}
