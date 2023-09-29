<?php

namespace App\DesignPatterns\Creational\AbstractFactory;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Abstract factory';
    }

    public function description(): string
    {
        return 'Шаблон проектування, що породжує, надає інтерфейс для створення сімейств взаємопов\'язаних або взаємозалежних об\'єктів, не специфікуючи їх конкретних класів. Шаблон реалізується створенням абстрактного класу Factory, який є інтерфейсом для створення компонентів системи (наприклад, для віконного інтерфейсу він може створювати вікна та кнопки). Потім пишуться класи, що реалізують цей інтерфейс.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/abstract-factory.png'));

        echo $this->textFormatter->pGrayText('Приклад: Графічний інтерфейс користувача(GUI, Graphical user interface)');

        $guiKit = (new GuiKitFactory())->getFactory('bootstrap');
//        $guiKit = (new GuiKitFactory())->getFactory('tailwind');

        $guiKit->buildButton()->draw();
        $guiKit->buildCheckbox()->draw();

        echo $this->textFormatter->pGrayText('Задавши конфігурацію tailwind - відмалює tailwind інтерфейс.');
    }
}
