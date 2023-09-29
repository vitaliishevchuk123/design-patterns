<?php

namespace App\DesignPatterns\Creational\Prototype;

class Client
{
    public int $id;

    public string $name;

    private array $orders = [];

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function addOrder(Order $order): void
    {
        $this->orders[$order->id] = $order;
    }

    public function getOrders(): array
    {
        return $this->orders;
    }
}
