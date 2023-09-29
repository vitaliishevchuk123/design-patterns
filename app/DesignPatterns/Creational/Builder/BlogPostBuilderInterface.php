<?php

namespace App\DesignPatterns\Creational\Builder;

interface BlogPostBuilderInterface
{
    public function create(): BlogPostBuilderInterface;

    public function setTitle(string $val): BlogPostBuilderInterface;

    public function setBody(string $val): BlogPostBuilderInterface;

    public function setCategories(array $data): BlogPostBuilderInterface;

    public function setTags(array $data): BlogPostBuilderInterface;

    public function getBLogPost(): BlogPost;
}
