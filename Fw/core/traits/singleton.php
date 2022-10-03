<?php

namespace Fw\Core\Traits;

trait Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}
