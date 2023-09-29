<?php

namespace App\DesignPatterns\Behavioral\Strategy\Contracts;

interface PaymentMethod
{
    public function pay(): string;
}
