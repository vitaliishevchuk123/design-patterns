<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Bootstrap;

use App\DesignPatterns\Creational\AbstractFactory\Contracts\ButtonInterface;

class ButtonBootstrap implements ButtonInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
