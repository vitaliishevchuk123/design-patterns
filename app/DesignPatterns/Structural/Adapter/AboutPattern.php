<?php

namespace App\DesignPatterns\Structural\Adapter;

use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryInterface;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Adapter';
    }

    public function description(): string
    {
        return 'Структурний патерн проектування, який дозволяє об\'єктам з несумісними інтерфейсами працювати разом.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('/images/patterns/adapter.png'));

//        $mediaLibrary = app(MediaLibrarySelfWritten::class);
//        $mediaLibrary = app(MediaLibraryAdapter::class);
        echo $this->textFormatter->pGrayText('Працюємо не через конкретний клас самописної медіа бібліотеки, а через її інтерфейс який в будь-який час підміняємо в AppServiceProvider на адаптер іншого класу реалізації.');
        $mediaLibrary = app(MediaLibraryInterface::class);
        $mediaLibrary->upload('someImagePath');
        $mediaLibrary->get('someCode');
    }
}
