<?php

namespace App\DesignPatterns\Behavioral\Strategy\Payments;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethod;

class ApplePayStrategy implements PaymentMethod
{

    public function pay(): string
    {
        return 'apple pay';
    }
}
