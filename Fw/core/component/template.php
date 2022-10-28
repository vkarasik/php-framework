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
    public $component = null;

    public function __construct($id, Base $component)
    {
        $this->component = $component;
        $this->id = $id;
        $this->relativePath = "/Fw" . $this->component->path . "/templates/" . $this->id;
        $this->path = realpath('.') . $this->relativePath;
    }

    /**
     * @param string $page страница подключения в шаблоне
     */
    public function render($page = 'template')
    {
        if (file_exists($this->path . '/result_modifier.php')) {
            include $this->path . '/result_modifier.php';
        }
        if (file_exists($this->path . '/' . $page . '.php')) {
            include $this->path . '/' . $page . '.php';
        }
        if (file_exists($this->path . '/component_epilog.php')) {
            include $this->path . '/component_epilog.php';
        }
        if (file_exists($this->path . '/style.css')) {
            Application::getInstance()->pager->addCss($this->relativePath . '/style.css');
        }
        if (file_exists($this->path . '/script.js')) {
            Application::getInstance()->pager->addJs($this->relativePath . '/script.js');
        }
    }
}
