<?php

namespace App\DesignPatterns\Fundamental\PropertyContainer;

class BlogPost
{
    private string $title;
    private int $categoryId;
    public PropertyContainer $propertyContainer;

    public function __construct()
    {
        $this->propertyContainer = new PropertyContainer;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }
}
