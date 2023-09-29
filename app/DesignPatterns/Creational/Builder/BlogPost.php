<?php

namespace App\DesignPatterns\Creational\Builder;

class BlogPost
{
    public string $title;
    public string $body;
    public array $categories = [];
    public array $tags = [];
}
