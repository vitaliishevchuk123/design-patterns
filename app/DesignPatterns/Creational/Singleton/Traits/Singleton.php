<?php

namespace App\DesignPatterns\Creational\Singleton\Traits;

trait Singleton
{
    private static $instance = null;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public static function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}
