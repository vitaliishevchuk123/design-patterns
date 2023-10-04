<?php

namespace App\DesignPatterns\Structural\Proxy\ProductRepositoryExample;

class ProductRepositoryProxyImpl implements ProductRepositoryInterface
{
    private ProductRepositoryInterface $repoObj;

    public function __construct()
    {
        $this->repoObj = new ProductRepositoryImpl();
    }

    public function find(int $productId): string
    {
        $key = 'Product_' . $productId;
        return cache()->remember($key, 1000, function () use ($productId) {
            return 'Proxy: ' . $this->repoObj->find($productId);
        });
    }
}
