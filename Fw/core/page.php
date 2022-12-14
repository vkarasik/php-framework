<?php

/**
 * Page Class
 */

namespace Fw\Core;

class Page
{
    use \Fw\Core\Traits\Singleton;

    private $props = array(
        'js' => [],
        'css' => [],
        'tags' => [],
    );

    public function addJs($src)
    {
        if (!isset($this->props['js'][md5($src)])) {
            $this->props['js'][md5($src)] = "<script src=\"$src\"></script>";
        }
    }

    public function addCss($link)
    {
        if (!isset($this->props['css'][md5($link)])) {
            $this->props['css'][md5($link)] = "<link href=\"$link\" rel=\"stylesheet\">";
        }
    }

    public function addString($str)
    {
        if (!isset($this->props['tags'][md5($str)])) {
            $this->props['tags'][md5($str)] = "<$str>";
        }
    }

    public function setProperty($id, $value)
    {
        $this->props[$id] = $value;
    }

    public function getProperty($id)
    {
        echo $this->props[$id];
    }

    public function showProperty($id)
    {
        echo '#FW_PAGE_PROPERTY_' . strtoupper($id) . '#';
    }

    public function getAllReplace($content)
    {
        foreach ($this->props as $key => $value) {
            // Поле содержит массив путей или тегов
            if (is_array($value)) {
                $macros = '#FW_PAGE_' . strtoupper($key) . '#';
                $replacement = implode($value);
                $content = str_replace($macros, $replacement, $content);
            } else {
                $macros = '#FW_PAGE_PROPERTY_' . strtoupper($key) . '#';
                $content = str_replace($macros, $value, $content);
            }
        }
        return $content;
    }

    public function showHead()
    {
        echo '#FW_PAGE_TAGS#' . "\n";
        echo '#FW_PAGE_CSS#' . "\n";
        echo '#FW_PAGE_JS#' . "\n";
    }
}
