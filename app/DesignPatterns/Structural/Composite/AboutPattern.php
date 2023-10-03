<?php

namespace App\DesignPatterns\Structural\Composite;

use App\DesignPatterns\Structural\Composite\MusicPlaying\Playlist;
use App\DesignPatterns\Structural\Composite\MusicPlaying\Song;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Composite';
    }

    public function description(): string
    {
        return 'Це структурний патерн проектування, що дає змогу згрупувати декілька об’єктів у деревоподібну структуру, а потім працювати з нею так, ніби це одиничний об’єкт.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/composite.png'));
        echo $this->textFormatter->zoomImage(asset('images/patterns/composite2.png'));
        echo $this->textFormatter->zoomImage(asset('images/patterns/composite3.png'));
        echo $this->textFormatter->zoomImage(asset('images/patterns/composite4.png'));

        $rockPlaylist = new Playlist();
        $rockPlaylist->addSong(new Song('The Kill', '30 Seconds to Mars', 'music/the-kill.mp3'));
        $rockPlaylist->addSong(new Song('Given up', 'Linkin Park', 'music/given-up.mp3'));
        $rockPlaylist->addSong(new Song('Pretty fly', 'The Offspring', 'music/pretty-fly.mp3'));

        echo $this->textFormatter->h3White('Приклад відтворення музики');

        echo $this->textFormatter->pGrayText('Можемо одним методом загального інтерфейсу відтворювати як в плейлисті');
        dump($rockPlaylist->play());
        dump($rockPlaylist->next());
        dump($rockPlaylist->next());
        dump($rockPlaylist->previous());

        echo $this->textFormatter->pGrayText('так і окремо');
        $someSingleSong = new Song('Single Song', 'Best Singer', 'music/single-song.mp3');
        dump($someSingleSong->play());
    }
}
