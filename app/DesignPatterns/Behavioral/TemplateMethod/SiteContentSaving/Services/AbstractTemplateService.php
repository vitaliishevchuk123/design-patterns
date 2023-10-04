<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Services;

use Illuminate\Database\Eloquent\Model;

class AbstractTemplateService
{
    protected Model $model;
    protected array $data;

    public function updateOrCreate(Model $model, array $data): bool
    {
        $this->setData($model, $data)
            ->updateOrCreateMainData()
            ->updateOrCreateContent()
            ->updateOrCreateImages()
            ->updateOrCreateSlug();
        return true;
    }

    protected function setData(Model $model, array $data): self
    {
        $this->model = $model;
        $this->data = $data;
        return $this;
    }

    protected function updateOrCreateMainData(): self
    {
        dump(__FUNCTION__ . ' ' . class_basename($this->model));
        return $this;
    }

    protected function updateOrCreateContent(): self
    {
        dump(__FUNCTION__ . ' ' . class_basename($this->model));
        return $this;
    }

    protected function updateOrCreateImages(): self
    {
        dump(__FUNCTION__ . ' ' . class_basename($this->model));
        return $this;
    }

    protected function updateOrCreateSlug(): self
    {
        dump(__FUNCTION__ . ' ' . class_basename($this->model));
        return $this;
    }
}
