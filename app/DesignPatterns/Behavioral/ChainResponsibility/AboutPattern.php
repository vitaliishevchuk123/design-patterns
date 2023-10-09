<?php

namespace App\DesignPatterns\Behavioral\ChainResponsibility;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Chain of responsibility';
    }

    public function description(): string
    {
        return 'Поведінковий патерн проектування, що дає змогу передавати запити послідовно ланцюжком обробників. Кожен наступний обробник вирішує, чи може він обробити запит сам і чи варто передавати запит далі ланцюжком.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('/images/patterns/chain-responsibility.png'));

        echo $this->textFormatter->pGrayText('Наприклад, перш ніж користувач здійснить певні дії в системі замовлень, його потрібно поступово ланцюжком перевірити спочатку чи авторизований, потім дані, що він ввів на валідацію, а потім аж виконати певні кроки з замовленнями. І якщо користувач не пройшов перший крок авторизації - немає сенсу пускати далі.');

        echo $this->textFormatter->image(asset('/images/patterns/chain-responsibility2.png'));

        echo $this->textFormatter->pGrayText('Як і багато інших поведінкових патернів, ланцюжок обов’язків базується на тому, щоб перетворити окремі поведінки на об’єкти. У нашому випадку кожна перевірка переїде до окремого класу з одним методом виконання. Дані запиту, що перевіряється, передаватимуться до методу як аргументи.');
        echo $this->textFormatter->pGrayText(' А тепер справді важливий етап. Патерн пропонує зв’язати всі об’єкти обробників в один ланцюжок. Кожен обробник міститиме посилання на наступного обробника в ланцюзі. Таким чином, після отримання запиту обробник зможе не тільки опрацювати його самостійно, але й передати обробку наступному об’єкту в ланцюжку.');

        echo $this->textFormatter->image(asset('/images/patterns/chain-responsibility3.png'));

        $locks = new Locks();
        $lights = new Lights();
        $alarm = new Alarm();

        $home = new HomeStatus();
        /**
         * Розкоментовуючи код нище ми засетимо зміни замкнутості, вимкнення світла і сигналізації для будинку в false
         * По дефолту в класі вони всі true
         * Змінюючи зміну на false ми отримаємо ексепшин валідації в ланцюжку класів, який відповідає за валідацію цієї змінної
         */
//        $home->locked = false;
//        $home->lightsOff = false;
//        $home->alarmOn = false;

        $locks->succeedWith($lights);
        $lights->succeedWith($alarm);

        echo $this->textFormatter->h3White('Приклад');
        echo $this->textFormatter->pGrayText('Для простоти розуміння приклад валідації виходу з дому.');
        echo $this->textFormatter->pGrayText('Всі наші класи валідації наслідують абстрактний клас HomeChecker. Він зобовʼязує реалізувати абстрактний метод check - власне перевірки класу. В абстрактному класі HomeChecker також є метод succeedWith, який сетить зміну $successor наступним класом, який викличеться в методі check методом next в разі успішного проходження класом валідації.');
        echo $this->textFormatter->pGrayText('Наш ланцюжок: $locks->succeedWith($lights) -> $lights->succeedWith($alarm)');
        echo $this->textFormatter->pGrayText('Оскільки в обʼєкт $alarm ми не засетили наступний саксесор, то він буде останнім класом валідації виходу з дому.');
        $locks->check($home);
        dump($locks);
    }
}
