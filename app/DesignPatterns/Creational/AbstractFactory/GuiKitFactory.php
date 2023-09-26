<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

use App\DesignPatterns\Creational\AbstractFactory\Bootstrap\BootstrapFactory;
use App\DesignPatterns\Creational\AbstractFactory\Contracts\GuiFactoryInterface;
use App\DesignPatterns\Creational\AbstractFactory\Tailwind\TailwindFactory;

class GuiKitFactory
{
    /**
     * @throws \Exception
     */
    public function getFactory(string $type): GuiFactoryInterface
    {
        return match ($type) {
            'bootstrap' => new BootstrapFactory(),
            'tailwind' => new TailwindFactory(),
            default => throw new \Exception('Undefined type!'),
        };
    }
}
