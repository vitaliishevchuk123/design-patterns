<?php

namespace App\DesignPatterns\Other\DTO;

class ProductDto2
{
    public int $id;

    public string $name;

    public int $categoryId;

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'categoryId' => $this->categoryId,
        ];
    }

    public function toJson(): string
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }
}
