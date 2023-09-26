<?php

namespace App\DesignPatterns\Creational\AbstractFactory\Tailwind;

use App\DesignPatterns\Creational\AbstractFactory\Contracts\ButtonInterface;

class ButtonTailwind implements ButtonInterface
{
    public function draw(): void
    {
        dump(__CLASS__);
    }
}
