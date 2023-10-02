<?php

namespace App\DesignPatterns\Structural\Bridge\WithoutBridge\Widgets;

use App\DesignPatterns\Structural\Bridge\Entities\Category;
use Illuminate\Support\Str;

class WidgetSmallCategory extends WidgetAbstract
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
            'fullTitle' => Str::limit($category->name, 7),
            'description' => $category->description,
        ];
    }
}
