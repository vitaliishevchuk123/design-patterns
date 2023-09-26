<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Contracts;

interface SubscriberInterface
{
    public function notify(string $data): void;
}
