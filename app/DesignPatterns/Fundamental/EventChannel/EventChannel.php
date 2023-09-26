<?php

namespace App\DesignPatterns\Fundamental\EventChannel;

use App\DesignPatterns\Fundamental\EventChannel\Contracts\EventChannelInterface;
use App\DesignPatterns\Fundamental\EventChannel\Contracts\SubscriberInterface;

class EventChannel implements EventChannelInterface
{
    private array $topics = [];

    public function subscribe(string $topic, SubscriberInterface $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
        dump("{$subscriber->getName()} підписаний(а) на [{$topic}]");
    }

    public function publish(string $topic, string $data): void
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            $subscriber->notify($data);
        }
    }
}
