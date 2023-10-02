<?php

namespace App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets;

use App\DesignPatterns\Structural\Bridge\Entities\Category;

class WidgetBigCategory extends WidgetAbstract
{
    public function run(Category $category)
    {
        $viewData = $this->getRealizationLogic($category);
        $this->viewLogic($viewData);
    }

    private function getRealizationLogic(Category $category): array
    {
        return [
            'id' => $category->id,
            'fullTitle' => $category->id . '::::' . $category->name,
            'description' => $category->description,
        ];
    }
}
