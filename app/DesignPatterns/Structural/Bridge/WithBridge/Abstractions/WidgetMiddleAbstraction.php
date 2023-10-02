<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge\Abstractions;

class WidgetMiddleAbstraction extends WidgetAbstract
{
    function getViewData(): array
    {
        return [
            'id' => $this->getRealization()->getId(),
            'fullTitle' => $this->getFullTitle(),
            'description' => $this->getRealization()->getDescription(),
        ];
    }

    private function getFullTitle(): string
    {
        return $this->getRealization()->getId() . '->' . $this->getRealization()->getTitle();
    }
}
