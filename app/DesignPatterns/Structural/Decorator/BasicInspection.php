<?php

namespace App\DesignPatterns\Structural\Decorator;

class BasicInspection implements CarService
{
    public function getCost(): int
    {
        return  25;
    }
}
