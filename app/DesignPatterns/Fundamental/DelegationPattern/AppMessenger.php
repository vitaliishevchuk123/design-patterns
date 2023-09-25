<?php

namespace App\DesignPatterns\Fundamental\DelegationPattern;

use App\DesignPatterns\Fundamental\DelegationPattern\Contracts\Messenger;
use App\DesignPatterns\Fundamental\DelegationPattern\Messengers\EmailMessenger;
use App\DesignPatterns\Fundamental\DelegationPattern\Messengers\SmsMessenger;

class AppMessenger implements Messenger
{
    public Messenger $messenger;

    public function __construct()
    {
        $this->toEmail();
    }

    public function toEmail(): Messenger
    {
        $this->messenger = new EmailMessenger();

        return $this;
    }

    public function toSms(): Messenger
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }

    public function setSender(string $value): Messenger
    {
        $this->messenger->setSender($value);
        return $this->messenger;
    }

    public function setRecipient(string $value): Messenger
    {
        $this->messenger->setRecipient($value);
        return $this->messenger;
    }

    public function setMessage(string $value): Messenger
    {
        $this->messenger->setMessage($value);
        return $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }
}
