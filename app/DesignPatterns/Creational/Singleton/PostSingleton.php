<?php

namespace App\DesignPatterns\Creational\Singleton;

use App\DesignPatterns\Creational\Singleton\Traits\Singleton;

class PostSingleton
{
    use Singleton;

    private string $text = '';

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
         $this->text = $text;
    }
}
