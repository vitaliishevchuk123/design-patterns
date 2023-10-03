<?php

namespace App\DesignPatterns\Structural\Decorator;

class OilChange implements CarService
{
    protected CarService $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost(): int
    {
        return 30 + $this->carService->getCost();
    }
}
