<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Tailwind;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\CheckBoxInterface;

class CheckBoxTailwind implements CheckBoxInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
