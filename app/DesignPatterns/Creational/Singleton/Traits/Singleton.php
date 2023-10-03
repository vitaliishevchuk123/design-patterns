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

    /**
     * Закоментував оскільки пхп 8 кидає варнінг
     * During class fetch: Uncaught ErrorException: The magic method ...Traits\Singleton::__wakeup()
     * must have public visibility
     */
//    private function __wakeup()
//    {
//    }

    public static function getInstance()
    {
        return static::$instance ?? (static::$instance = new static());
    }
}
