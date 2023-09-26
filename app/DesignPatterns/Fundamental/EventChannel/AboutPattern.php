<?php

namespace App\DesignPatterns\Fundamental\EventChannel;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Event channel';
    }

    public function description(): string
    {
        return 'Фундаментальний шаблон проектування, що використовується для створення каналу зв\'язку та комунікації через нього за допомогою подій. Цей канал забезпечує можливість різним видавцям публікувати події та підписникам, підписуючись на них, отримувати повідомлення.';
    }

    public function example()
    {
        $newsChannel = new EventChannel();

        $highgardenGroup = new Publisher('highgarden-news', $newsChannel);

        $winterfellNews = new Publisher('winterfell-news', $newsChannel);
        $winterfellDaily = new Publisher('winterfell-news', $newsChannel);

        $sansa = new Subscriber('Sansa Stark');
        $arya = new Subscriber('Arya Stark');
        $cersei = new Subscriber('Cercei Lannister');
        $snow = new Subscriber('Jon Snow');

        echo $this->textFormatter->pGrayText('Підписки читачів на новини');
        $newsChannel->subscribe('highgarden-news', $cersei);

        $newsChannel->subscribe('winterfell-news', $sansa);

        $newsChannel->subscribe('highgarden-news', $arya);
        $newsChannel->subscribe('winterfell-news', $arya);

        $newsChannel->subscribe('winterfell-news', $snow);

        echo $this->textFormatter->pGrayText('Сповіщення підписникам згідно підписок на топіки');
        $highgardenGroup->publish('New highgarden post!');
        $winterfellNews->publish('New winterfell post! Created by Winterfell News');
        $winterfellDaily->publish('New alternative winterfell post! Created by Winterfell Daily');
    }
}
