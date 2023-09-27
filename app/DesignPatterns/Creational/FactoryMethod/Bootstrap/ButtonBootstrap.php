<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Bootstrap;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
