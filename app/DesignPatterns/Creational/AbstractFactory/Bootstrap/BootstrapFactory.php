<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Bootstrap;

use App\DesignPatterns\Creational\AbstractFactory\Contracts\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Contracts\CheckBoxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Contracts\GuiFactoryInterface;

class BootstrapFactory implements GuiFactoryInterface
{

    public function buildButton(): ButtonInterface
    {
        return new ButtonBootstrap();
    }

    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckBoxBootstrap();
    }
}
