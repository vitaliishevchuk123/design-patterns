<?php

namespace App\DesignPatterns\Structural\Proxy;

use App\DesignPatterns\Structural\Proxy\ProductRepositoryExample\GetProductTask;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Proxy';
    }

    public function description(): string
    {
        return 'Структурний патерн проектування, що дає змогу підставляти замість реальних об’єктів спеціальні об’єкти-замінники. Ці об’єкти перехоплюють виклики до оригінального об’єкта, дозволяючи зробити щось до чи після передачі виклику оригіналові.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/proxy.png'));

        $task = new GetProductTask();
        dump($task->run(3));
        dump($task->runImpl(100));
    }
}
