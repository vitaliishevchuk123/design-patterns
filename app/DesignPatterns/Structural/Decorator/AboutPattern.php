<?php

namespace App\DesignPatterns\Structural\Decorator;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Decorator';
    }

    public function description(): string
    {
        return 'Структурний патерн проектування, що дає змогу динамічно додавати об’єктам нову функціональність, загортаючи їх у корисні «обгортки».';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/decorator.png'));
        echo $this->textFormatter->image(asset('images/patterns/decorator2.png'));

        echo $this->textFormatter->h3White('Приклад: Техогляд авто');
        echo $this->textFormatter->pGrayText('BasicInspection - базовий огляд і має базову вартість - 25. Далі в залежності від сервісів, що вибрав клієнт обгортоямо його в інші класи послуг і додаємо вартість загальну. Переваги, що нам не потрібно дописувати методи в одному базовому класі, а якщо добавиться ще послуга нова, то просто створимо клас.');

        $service = new OilChange(new TireRotation(new BasicInspection()));
        dump($service);
        dump($service->getCost());

        $newService = new OilChange(new BasicInspection());
        dump($newService);
        dump($newService->getCost());
    }
}
