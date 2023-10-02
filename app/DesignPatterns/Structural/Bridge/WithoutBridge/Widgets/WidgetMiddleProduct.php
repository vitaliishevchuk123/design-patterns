<?php

namespace App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets;

use App\DesignPatterns\Structural\Bridge\Entities\Product;

class WidgetMiddleProduct extends WidgetAbstract
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
            'fullTitle' => $product->id . '->' . $product->name,
            'description' => $product->description,
        ];
    }
}
