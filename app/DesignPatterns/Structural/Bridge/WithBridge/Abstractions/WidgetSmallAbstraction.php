<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge\Abstractions;

use Illuminate\Support\Str;

class WidgetSmallAbstraction extends WidgetAbstract
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
        return Str::limit($this->getRealization()->getTitle(), 5);
    }
}
