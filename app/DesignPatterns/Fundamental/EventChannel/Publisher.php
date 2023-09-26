<?php

namespace App\DesignPatterns\Fundamental\EventChannel;

use App\DesignPatterns\Fundamental\EventChannel\Contracts\EventChannelInterface;
use App\DesignPatterns\Fundamental\EventChannel\Contracts\PublisherInterface;

class Publisher implements PublisherInterface
{
    private string $topic;

    private EventChannelInterface $eventChannel;

    public function __construct(string $topic, EventChannelInterface $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }

    public function publish(string $data): void
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}
