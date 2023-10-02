<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge\Realizations;

use App\DesignPatterns\Structural\Bridge\Entities\Product;
use App\DesignPatterns\Structural\Bridge\WithBridge\Contracts\WidgetRealizationInterface;

class ProductWidgetRealization implements WidgetRealizationInterface
{
    private Product $entity;

    public function __construct(Product $entity)
    {
        $this->entity = $entity;
    }

    public function getId(): string
    {
        return $this->entity->id;
    }

    public function getTitle(): string
    {
        return $this->entity->name;
    }

    public function getDescription(): string
    {
        return $this->entity->description;
    }
}
