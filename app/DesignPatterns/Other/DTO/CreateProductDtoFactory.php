<?php

namespace App\DesignPatterns\Other\DTO;

use Illuminate\Http\Request;

class CreateProductDtoFactory
{
    public static function createFromRequest(Request $request): ProductDto
    {
        return self::createFromArray($request->validated());
    }

    public static function createFromArray(array $data): ProductDto
    {
        $dto = new ProductDto();

        $dto->id = $data['id'];
        $dto->name = $data['name'];
        $dto->categoryId = $data['categoryId'];

        return  $dto;
    }
}
