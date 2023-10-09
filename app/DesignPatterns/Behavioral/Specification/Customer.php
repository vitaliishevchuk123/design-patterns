<?php

namespace App\DesignPatterns\Behavioral\Specification;

class Customer
{
    protected string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function type(): string
    {
        return $this->type;
    }
}
