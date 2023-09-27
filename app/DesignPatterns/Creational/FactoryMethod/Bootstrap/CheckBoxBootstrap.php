<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Bootstrap;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
