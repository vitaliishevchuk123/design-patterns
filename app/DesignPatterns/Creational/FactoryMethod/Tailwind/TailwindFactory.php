<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Tailwind;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\ButtonInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckBoxInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

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
