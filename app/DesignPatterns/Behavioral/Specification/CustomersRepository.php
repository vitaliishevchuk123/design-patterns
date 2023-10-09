<?php

namespace App\DesignPatterns\Behavioral\Specification;

class CustomersRepository
{
    protected array $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function matchingSpecification($specification): array
    {
        $matches = [];

        foreach ($this->all() as $customer) {
            if ($specification->isSatisfiedBy($customer)) {
                $matches[] = $customer;
            }
        }

        return $matches;
    }

    public function all(): array
    {
        return $this->customers;
    }
}
