<?php
namespace App\DesignPatterns\Creational\FactoryMethod\Bootstrap;

use App\DesignPatterns\Creational\FactoryMethod\AbstractForm;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

class BootstrapDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new BootstrapFactory();
    }
}
