<?php

namespace App\DesignPatterns\Behavioral\Specification;

class CustomerIsGold
{
    public function isSatisfiedBy(Customer $customer): bool
    {
        return $customer->type() == 'gold';
    }
}
