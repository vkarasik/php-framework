<?php

/**
 * Application Class
 */

namespace Fw\Core;

class Application
{
    private $__components = [];
    private $pager = null;
    private $template = null;

    use \Fw\Core\Traits\Singleton;

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
    }

    private function restartBuffer()
    {
        ob_end_clean();
    }
}
