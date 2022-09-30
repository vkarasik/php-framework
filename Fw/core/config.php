<?php

/**
 * Config Class
 */

namespace Fw\Core;

class Config
{
    private $config;

    public function __construct()
    {
        require_once(dirname(__DIR__) . '/config.php');
        $this->config = $config;
    }

    public function get($path)
    {
        $path = explode('/', $path);
        $config = $this->config;
        foreach ($path as $lv) {
            $config = $config[$lv];
        }
        return $config;
    }
}
