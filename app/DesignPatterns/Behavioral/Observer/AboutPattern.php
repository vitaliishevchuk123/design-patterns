<?php

namespace App\DesignPatterns\Behavioral\Observer;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Observer';
    }

    public function description(): string
    {
        return 'Поведінковий патерн проектування, який створює механізм підписки, що дає змогу одним об’єктам стежити й реагувати на події, які відбуваються в інших об’єктах.';
    }

    public function example()
    {
        $observer = new UserObserver();
        $user = new User();
        $user->attach($observer);
        $user->changeEmail('foo@bar.com');

        dump($user);
    }
}
