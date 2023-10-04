<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\MakingSandwiches;

class TurkeySandwich extends AbstractSandwich
{
    protected function addPrimaryToppings(): AbstractSandwich
    {
        dump('add some turkey');
        return $this;
    }
}
