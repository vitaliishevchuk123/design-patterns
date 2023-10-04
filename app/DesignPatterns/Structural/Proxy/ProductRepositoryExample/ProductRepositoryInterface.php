<?php

namespace App\DesignPatterns\Structural\Proxy\ProductRepositoryExample;

interface ProductRepositoryInterface
{
    public function find(int $productId): string;
}
