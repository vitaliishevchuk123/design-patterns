<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Contracts;

interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;

    public function buildCheckbox(): CheckBoxInterface;
}
