<?php

namespace App\DesignPatterns\Creational\FactoryMethod\Tailwind;

use App\DesignPatterns\Creational\FactoryMethod\Contracts\ButtonInterface;

class ButtonTailwind implements ButtonInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
