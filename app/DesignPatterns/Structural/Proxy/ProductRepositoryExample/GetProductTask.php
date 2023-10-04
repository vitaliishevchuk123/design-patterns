<?php

namespace App\DesignPatterns\Structural\Proxy\ProductRepositoryExample;

class GetProductTask
{
    /**
     * Проста робота напряму з класом репозиторія, щоб дістати продукт
     * Proxy при такому підході не реалізуєш
     */
    public function run(int $productId): string
    {
        return (new ProductRepository())->find($productId);
    }

    /**
     * Проста робота напряму з класом репозиторія, щоб дістати продукт
     * Proxy при такому підході не реалізуєш
     */
    public function runImpl(int $productId): string
    {
        return app(ProductRepositoryInterface::class)->find($productId);
    }

}
