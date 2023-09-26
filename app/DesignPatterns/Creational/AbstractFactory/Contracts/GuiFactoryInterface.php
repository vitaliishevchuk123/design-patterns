<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Contracts;

interface GuiFactoryInterface
{
    public function buildButton(): ButtonInterface;

    public function buildCheckbox(): CheckBoxInterface;
}
