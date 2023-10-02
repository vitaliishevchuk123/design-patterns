<?php

namespace App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets;

abstract class WidgetAbstract
{
    protected function viewLogic(array $viewData): void
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;
        dump($viewData, $method);
    }
}
