<?php

namespace App\DesignPatterns\Structural\Proxy\ProductRepositoryExample;

class ProductRepositoryImpl implements ProductRepositoryInterface
{
    public function find(int $productId): string
    {
        return "I am a product {$productId} from ProductRepositoryImpl";
    }
}
