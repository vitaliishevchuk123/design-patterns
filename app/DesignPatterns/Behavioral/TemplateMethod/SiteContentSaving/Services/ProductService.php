<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Services;

use Illuminate\Database\Eloquent\Model;

class ProductService extends AbstractTemplateService
{
    public function updateOrCreate(Model $model, array $data): bool
    {
        $this->setData($model, $data)
            ->updateOrCreateMainData()
            ->updateOrCreateContent()
            ->updateOrCreateImages()
            ->updateOrCreateSlug()
            ->updateOrCreateRelatedProducts();
        return true;
    }

    public function updateOrCreateRelatedProducts(): ProductService
    {
        dump(__FUNCTION__ . ' ' . class_basename($this->model));
        return $this;
    }
}
