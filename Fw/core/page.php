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
        if (!in_array($src, $this->props['js'])) {
            $this->props['js'][] = $src;
        }
    }

    public function addCss($link)
    {
        if (!in_array($link, $this->props['css'])) {
            $this->props['css'][] = $link;
        }
    }

    public function addString($str)
    {
        if (!in_array($str, $this->props['tags'])) {
            $this->props['tags'][] = $str;
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

    public function getAllReplace($arr_mac, $content)
    {
        foreach ($arr_mac as $macros) {
            $key = strtolower(preg_replace('/#FW_PAGE_?(PROPERTY_)?(.+)#$/', '${2}', $macros));
            $prop = $this->props[$key];

            // Поле содержит массив путей или тегов
            if (is_array($prop)) {
                foreach ($prop as $val) {
                    switch ($key) {
                        case 'js':
                            $replacement = "<script src=\"$val\"></script>";
                            break;
                        case 'css':
                            $replacement = "<link href=\"$val\" rel=\"stylesheet\">";
                            break;
                        case 'tags':
                            $replacement = "<$val>";
                    }
                    $content = str_replace($macros, $replacement, $content);
                }
            } else {
                $content = str_replace($macros, $prop, $content);
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
