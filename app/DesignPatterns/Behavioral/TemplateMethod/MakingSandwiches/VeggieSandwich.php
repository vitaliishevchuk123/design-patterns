<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches;

class VeggieSandwich extends AbstractSandwich
{
    protected function addPrimaryToppings(): AbstractSandwich
    {
        dump('add some veggies');
        return $this;
    }
}
