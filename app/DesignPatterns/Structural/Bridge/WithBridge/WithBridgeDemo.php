<?php

namespace App\DesignPatterns\Structural\Bridge\WithBridge;

use App\DesignPatterns\Structural\Bridge\Entities\Category;
use App\DesignPatterns\Structural\Bridge\Entities\Product;
use App\DesignPatterns\Structural\Bridge\WithBridge\Abstractions\WidgetBigAbstraction;
use App\DesignPatterns\Structural\Bridge\WithBridge\Abstractions\WidgetMiddleAbstraction;
use App\DesignPatterns\Structural\Bridge\WithBridge\Abstractions\WidgetSmallAbstraction;
use App\DesignPatterns\Structural\Bridge\WithBridge\Realizations\CategoryWidgetRealization;
use App\DesignPatterns\Structural\Bridge\WithBridge\Realizations\ProductWidgetRealization;

class WithBridgeDemo
{
    public function run(): void
    {
        $realizations = [
         new ProductWidgetRealization(new Product()),
         new CategoryWidgetRealization(new Category()),
        ];

        $views = [
          new WidgetBigAbstraction(),
          new WidgetMiddleAbstraction(),
          new WidgetSmallAbstraction(),
        ];

        foreach ($realizations as $realization) {
            foreach ($views as $view)
            {
                $view->run($realization);
            }
        }
    }
}
