<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge\Realizations;

use App\DesignPatterns\Structural\Bridge\Entities\Category;
use App\DesignPatterns\Structural\Bridge\WithBridge\Contracts\WidgetRealizationInterface;

class CategoryWidgetRealization implements WidgetRealizationInterface
{
    private Category $entity;

    public function __construct(Category $entity)
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
