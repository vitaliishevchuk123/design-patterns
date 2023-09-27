<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\FormInterface;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

abstract class AbstractForm implements FormInterface
{
    public function render()
    {
        $guiKit = $this->createGuiKit();
        $guiKit->buildCheckbox()->draw();
        $guiKit->buildButton()->draw();
    }

    abstract function createGuiKit(): GuiFactoryInterface;
}
