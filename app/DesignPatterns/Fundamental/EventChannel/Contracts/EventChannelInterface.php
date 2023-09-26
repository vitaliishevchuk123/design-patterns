<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Contracts;

interface EventChannelInterface
{
    public function publish(string $topic, string $data): void;

    public function subscribe(string $topic, SubscriberInterface $subscriber);
}
