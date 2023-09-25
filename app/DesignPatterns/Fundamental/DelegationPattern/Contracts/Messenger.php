<?php

namespace App\DesignPatterns\Fundamental\DelegationPattern\Contracts;

interface Messenger
{
    public function setSender(string $value): Messenger;

    public function setRecipient(string $value): Messenger;

    public function setMessage(string $value): Messenger;

    public function send(): bool;
}
