<?php

/**
 * Application Class
 */

class Application
{
    private static $instance = null;
    private $__components = [];
    private $pager = null;
    private $template = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Application();
        }
        return self::$instance;
    }
}
