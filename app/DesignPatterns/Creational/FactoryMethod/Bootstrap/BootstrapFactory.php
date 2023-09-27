<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Bootstrap;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\ButtonInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckBoxInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

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
