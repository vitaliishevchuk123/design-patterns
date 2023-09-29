<?php

namespace App\DesignPatterns\Behavioral\Strategy;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Strategy';
    }

    public function description(): string
    {
        return 'Призначений для визначення сімейства алгоритмів, інкапсуляції кожного з них і забезпечення їх взаємозамінюваності. Це дозволяє вибрати алгоритм шляху визначення відповідного класу. Шаблон Strategy дозволяє змінити вибраний алгоритм незалежно від об\'єктів-клієнтів, які його використовують.';
    }

    public function example()
    {
        echo $this->textFormatter->h3White('Схема шаблону');
        echo $this->textFormatter->zoomImage(asset('/images/patterns/strategy.png'));

        $paymentStrategyContext = new PaymentStrategyContext('credit');

        dump($paymentStrategyContext->pay());

        $paymentStrategyContext->setStrategy('apple');
        dump($paymentStrategyContext->pay());
    }
}
