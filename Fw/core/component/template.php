<?php

namespace Fw\Core\Component;

use Fw\Core\Application;

/**
 * Класс управления шаблоном компонента
 * @param string $path путь к файловой структуре шаблона
 * @param string $relativePath url к файловой структуре шаблона, для подключения css и js
 * @param string $id ID шаблона компонента

 * @method render() подключение файла шаблона
 */

class Template
{
    public $path = null;
    public $relativePath = null;
    public $id = null;

    public function __construct($path, $id)
    {
        $this->id = $id;
        $this->relativePath = "/Fw" . $path . "/templates/" . $this->id;
        $this->path = realpath('.') . $this->relativePath;
    }

    /**
     * @param string $page страница подключения в шаблоне
     */
    public function render($params, $result)
    {
        include $this->path . '/result_modifier.php';
        include $this->path . '/template.php';
        include $this->path . '/component_epilog.php';

        $app = Application::getInstance();
        $pager = $app->pager;
        $pager->addCss($this->relativePath . '/style.css');
        $pager->addJs($this->relativePath . '/script.js');
    }
}
