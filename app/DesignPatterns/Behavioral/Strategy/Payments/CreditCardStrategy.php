<?php

namespace App\DesignPatterns\Behavioral\Strategy\Payments;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethod;

class CreditCardStrategy implements PaymentMethod
{

    public function pay(): string
    {
        return 'credit card';
    }
}
