<?php

namespace App\DesignPatterns\Other\DTO;

use Illuminate\Http\Request;

class ProductDto4
{
    public int $id;

    public string $name;

    public int $categoryId;

    public static function createFromRequest(Request $request): self
    {
        return self::createFromArray($request->validated());
    }

//    public static function createFromArray(array $data): self
//    {
//        $dto = new self();
//
//        $dto->id = $data['id'];
//        $dto->name = $data['name'];
//        $dto->categoryId = $data['categoryId'];
//
//        return  $dto;
//    }

    public static function createFromArray(array $data): self
    {
        $dto = new self();
        $classProperties = get_class_vars(self::class);

        foreach ($classProperties as $property => $value) {
            if (array_key_exists($property, $data)) {
                $dto->$property = $data[$property];
            } else {
                throw new \InvalidArgumentException("Field '$property' is missing in the data array.");
            }
        }

        return $dto;
    }
}
