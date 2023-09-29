<?php

namespace App\DesignPatterns\Behavioral\Strategy\Payments;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethod;

class GooglePayStrategy implements PaymentMethod
{

    public function pay(): string
    {
        return 'google pay';
    }
}
