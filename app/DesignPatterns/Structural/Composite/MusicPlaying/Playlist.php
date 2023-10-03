<?php

namespace App\DesignPatterns\Structural\Composite\MusicPlaying;

class Playlist implements MusicInterface
{
    protected array $songs = [];
    protected int $currentTrack = 0;

    public function addSong(MusicInterface $song): bool
    {
        $this->songs[] = $song;
        return true;
    }

    public function play(): string
    {
        if (count($this->songs) === 0) {
            return 'Empty playlist';
        }
        return $this->songs[$this->currentTrack]->play();
    }

    public function next(): string
    {
        if (isset($this->songs[$this->currentTrack + 1])) {
            $this->currentTrack++;
            return $this->play();
        }

        return '';
    }

    public function previous(): string
    {
        if ($this->currentTrack > 0) {
            $this->currentTrack--;
            return $this->play();
        }

        return '';
    }

    public function repeat()
    {
        $this->currentTrack = 0;
        $this->play();
    }

}
