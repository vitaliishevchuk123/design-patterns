<?php

namespace App\DesignPatterns\Structural\Decorator;

class TireRotation implements CarService
{
    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): int
    {
        return 50 + $this->carService->getCost();
    }
}
