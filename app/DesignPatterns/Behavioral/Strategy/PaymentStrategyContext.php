<?php

namespace App\DesignPatterns\Behavioral\Strategy;

use App\DesignPatterns\Behavioral\Strategy\Contracts\PaymentMethod;
use App\DesignPatterns\Behavioral\Strategy\Payments\ApplePayStrategy;
use App\DesignPatterns\Behavioral\Strategy\Payments\CreditCardStrategy;
use App\DesignPatterns\Behavioral\Strategy\Payments\GooglePayStrategy;

class PaymentStrategyContext
{
    private PaymentMethod $strategy;

    public function __construct(string $method)
    {
        $this->setStrategy($method);
    }

    public function setStrategy(string $method): void
    {
        $this->strategy = match ($method) {
            'credit' => new CreditCardStrategy(),
            'apple' => new ApplePayStrategy(),
            'google' => new GooglePayStrategy(),
            default => throw new \InvalidArgumentException('Only credit, google or apple method!')
        };
    }

    public function pay(): string
    {
        return $this->strategy->pay();
    }
}
