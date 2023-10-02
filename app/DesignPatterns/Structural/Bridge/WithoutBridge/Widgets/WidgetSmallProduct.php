<?php

namespace App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets;

use App\DesignPatterns\Structural\Bridge\Entities\Product;
use Illuminate\Support\Str;

class WidgetSmallProduct extends WidgetAbstract
{
    public function run(Product $product)
    {
        $viewData = $this->getRealizationLogic($product);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Product $product): array
    {
        return [
            'id' => $product->id,
            'fullTitle' => Str::limit($product->name, 7),
            'description' => $product->description,
        ];
    }
}
