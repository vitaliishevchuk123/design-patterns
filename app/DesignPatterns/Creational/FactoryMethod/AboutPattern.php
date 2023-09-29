<?php

namespace App\DesignPatterns\Creational\FactoryMethod;

use App\DesignPatterns\Creational\FactoryMethod\Tailwind\TailwindDialogForm;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Factory method';
    }

    public function description(): string
    {
        return 'Визначає інтерфейс для створення об\'єкта, але залишає підкласам рішення про те, який саме клас інстанціювати. Фабричний метод дозволяє класу делегувати інстанціювання підкласам.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/factory.png'));

        echo $this->textFormatter->pGrayText('В залежності від виклику класа наслідника буде реалізація класу, що вказаний у фабричному методі');

//        $dialogForm = new BootstrapDialogForm();
        $dialogForm = new TailwindDialogForm();
        $dialogForm->render();
    }
}
