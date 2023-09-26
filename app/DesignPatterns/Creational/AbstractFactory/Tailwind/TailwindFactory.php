<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Tailwind;

use App\DesignPatterns\Creational\AbstractFactory\Contracts\ButtonInterface;
use App\DesignPatterns\Creational\AbstractFactory\Contracts\CheckBoxInterface;
use App\DesignPatterns\Creational\AbstractFactory\Contracts\GuiFactoryInterface;

class TailwindFactory implements GuiFactoryInterface
{
    public function buildCheckbox(): CheckBoxInterface
    {
        return new CheckBoxTailwind();
    }

    public function buildButton(): ButtonInterface
    {
        return new ButtonTailwind();
    }
}
