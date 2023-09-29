<?php

namespace App\DesignPatterns\Creational\Singleton;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Singleton';
    }

    public function description(): string
    {
        return 'Шаблон проєктування гарантує, що клас матиме тільки один екземпляр, і забезпечує глобальну точку доступу до цього екземпляра. Через низку притаманних недоліків деякі розробники вважають його антипатерном або «душком» коду.';
    }

    public function example()
    {
        echo $this->textFormatter->pGrayText('Перший раз створюємо обʼєкт як одинака і наділяємо властивістю');
        $postFirst = PostSingleton::getInstance();
        $postFirst->setText('First text!');
        dump($postFirst);

        echo $this->textFormatter->pGrayText('Ще раз дістаємо обʼєкт');
        $postSecond = PostSingleton::getInstance();
        $postFirst->setText('Second text!');
        dump($postSecond);

        echo $this->textFormatter->pGrayText('Порівнюємо обʼєкти');
        dump($postFirst === $postSecond);
    }
}
