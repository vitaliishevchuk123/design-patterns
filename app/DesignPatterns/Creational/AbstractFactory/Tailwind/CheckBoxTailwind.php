<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Tailwind;

use App\DesignPatterns\Creational\AbstractFactory\Contracts\CheckBoxInterface;

class CheckBoxTailwind implements CheckBoxInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
