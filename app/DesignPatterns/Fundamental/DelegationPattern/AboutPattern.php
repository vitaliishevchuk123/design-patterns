<?php

namespace App\DesignPatterns\Fundamental\DelegationPattern;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{

    public function name(): string
    {
        return 'Delegation pattern';
    }

    public function description(): string
    {
        return 'Об\'єкт зовнішньо виражає деяку поведінку, але в реальності передає відповідальність за виконання цієї поведінки іншому об\'єкту.';
    }

    public function example()
    {
        $messenger = new AppMessenger();

        echo $this->textFormatter->pGrayText('Стандартна відправка через емейл');
        $messenger->setSender('super-travel-company@gmail.com')
            ->setRecipient('Vasia@gmail.com')
            ->setMessage('Your flight is this Friday')
            ->send();
        dump($messenger);

        echo $this->textFormatter->pGrayText('Відправка через смс');
        $messenger->toSms()
            ->setSender('super-travel-company@gmail.com')
            ->setRecipient('Vasia@gmail.com')
            ->setMessage('Your flight is this Friday. The receipt has been sent to you by mail.')
            ->send();
        dump($messenger);
    }
}
