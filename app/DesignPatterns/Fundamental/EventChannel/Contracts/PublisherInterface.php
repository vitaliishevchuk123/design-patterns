<?php

namespace App\DesignPatterns\Fundamental\EventChannel\Contracts;

interface PublisherInterface
{
    public function publish(string $data);
}
