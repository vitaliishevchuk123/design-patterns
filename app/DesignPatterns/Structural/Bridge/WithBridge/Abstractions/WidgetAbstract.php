<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge\Abstractions;

use App\DesignPatterns\Structural\Bridge\WithBridge\Contracts\WidgetRealizationInterface;

abstract class WidgetAbstract
{
    private WidgetRealizationInterface $realization;

    public function getRealization(): WidgetRealizationInterface
    {
        return $this->realization;
    }

    public function setRealization(WidgetRealizationInterface $realization): void
    {
        $this->realization = $realization;
    }

    protected function viewLogic(array $viewData): void
    {
        $method = class_basename(static::class) . '::' . __FUNCTION__;
        dump($viewData, $method);
    }

    public function run(WidgetRealizationInterface $realization): void
    {
        $this->setRealization($realization);
        $viewData = $this->getViewData();
        $this->viewLogic($viewData);
    }

    abstract function getViewData(): array;
}
