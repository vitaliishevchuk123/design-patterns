<?php

namespace App\DesignPatterns\Structural\Composite\MusicPlaying;

class Song implements MusicInterface
{
    protected string $title;

    protected string $artist;

    protected string $path;

    public function __construct(string $title, string $artist, string $path)
    {
        $this->title = $title;
        $this->artist = $artist;
        $this->path = $path;
    }

    public function play(): string
    {
        return $this->path;
    }
}
