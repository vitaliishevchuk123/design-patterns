<?php

namespace App\DesignPatterns\Creational\Builder;

class BlogPostBuilder implements BlogPostBuilderInterface
{
    private BlogPost $blogPost;

    public function __construct()
    {
        $this->create();
    }

    public function create(): BlogPostBuilderInterface
    {
        $this->blogPost = new BlogPost();
        return $this;
    }

    public function setTitle(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->title = $val;
        return $this;
    }

    public function setBody(string $val): BlogPostBuilderInterface
    {
        $this->blogPost->body = $val;
        return $this;
    }

    public function setCategories(array $data): BlogPostBuilderInterface
    {
        $this->blogPost->categories = $data;
        return $this;
    }

    public function setTags(array $data): BlogPostBuilderInterface
    {
        $this->blogPost->tags = $data;
        return $this;
    }

    public function getBLogPost(): BlogPost
    {
        $blogPost = $this->blogPost;
        $this->create();
        return $blogPost;
    }
}
