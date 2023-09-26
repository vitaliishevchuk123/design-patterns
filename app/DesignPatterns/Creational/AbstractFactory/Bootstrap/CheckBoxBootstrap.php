<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Bootstrap;

use App\DesignPatterns\Creational\AbstractFactory\Contracts\CheckBoxInterface;

class CheckBoxBootstrap implements CheckBoxInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
