<?php

namespace App\DesignPatterns\Structural\Bridge\WithoutBridge;

use App\DesignPatterns\Structural\Bridge\Entities\Category;
use App\DesignPatterns\Structural\Bridge\Entities\Product;
use App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets\WidgetBigCategory;
use App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets\WidgetBigProduct;
use App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets\WidgetSmallCategory;
use App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets\WidgetSmallProduct;

class WithoutBridgeDemo
{
    public function run(): void
    {
        $product = new Product();
        (new WidgetSmallProduct())->run($product);
        (new WidgetBigProduct())->run($product);
        (new WidgetSmallProduct())->run($product);

        $category = new Category();
        (new WidgetSmallCategory())->run($category);
        (new WidgetBigCategory())->run($category);
        (new WidgetSmallCategory())->run($category);
    }
}
