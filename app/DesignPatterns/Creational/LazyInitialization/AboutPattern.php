<?php

namespace App\DesignPatterns\Creational\LazyInitialization;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Lazy initialization';
    }

    public function description(): string
    {
        return 'Прийом у програмуванні, коли деяка ресурсомістка операція (створення об\'єкта, обчислення значення) виконується безпосередньо перед тим, як буде використано її результат. Отже, ініціалізація виконується «на вимогу», а не заздалегідь. Аналогічна ідея знаходить застосування в різних областях: наприклад, компіляція «на льоту» і логістична концепція «Точно в термін».';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('/images/patterns/lazy-init.png'));

        echo $this->textFormatter->pGrayText('При створенні обʼєкта юзер пустий');
        $lazy = new LazyInitialization();
        dump($lazy);

        echo $this->textFormatter->pGrayText('Заповниться тільки зараз, коли ми викликали метод отримання юзера');
        dump($lazy->getUser()->name);
        dump($lazy);

        echo $this->textFormatter->pGrayText('При повторному отриманні юзера - взявся той самий зі змінної');
        dump($lazy->getUser());
    }
}
