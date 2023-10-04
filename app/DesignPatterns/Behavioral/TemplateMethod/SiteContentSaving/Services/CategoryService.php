<?php

namespace App\DesignPatterns\Behavioral\TemplateMethod\SiteContentSaving\Services;

class CategoryService extends AbstractTemplateService
{
    /**
     * Для категорій не потрібне збереження фото - перевизначаєм метод пустим
     */
    public function updateOrCreateImages(): AbstractTemplateService
    {
        return $this;
    }
}
