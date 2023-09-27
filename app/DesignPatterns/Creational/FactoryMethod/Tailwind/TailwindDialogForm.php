<?php
namespace App\DesignPatterns\Creational\FactoryMethod\Tailwind;

use App\DesignPatterns\Creational\FactoryMethod\AbstractForm;
use App\DesignPatterns\Creational\FactoryMethod\Contracts\GuiFactoryInterface;

class TailwindDialogForm extends AbstractForm
{
    public function createGuiKit(): GuiFactoryInterface
    {
        return new TailwindFactory();
    }
}
