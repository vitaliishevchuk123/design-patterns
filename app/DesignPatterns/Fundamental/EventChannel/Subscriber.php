<?php

namespace App\DesignPatterns\Fundamental\EventChannel;

use App\DesignPatterns\Fundamental\EventChannel\Contracts\SubscriberInterface;

class Subscriber implements SubscriberInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function notify(string $data): void
    {
        dump("{$this->getName()} сповіщений(а) даними [{$data}]");
    }

    public function getName(): string
    {
        return $this->name;
    }
}
