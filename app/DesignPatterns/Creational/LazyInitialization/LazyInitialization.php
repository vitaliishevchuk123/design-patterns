<?php

namespace App\DesignPatterns\Creational\LazyInitialization;

use App\Models\User;

class LazyInitialization
{
    private ?User $user = null;

    public function getUser(): User
    {
        if (is_null($this->user)) {
            $this->user = User::first();
            dump('Only one initialization');
        }

        return $this->user;
    }

    public function otherMethod(): string
    {
        return 'something else';
    }
}
