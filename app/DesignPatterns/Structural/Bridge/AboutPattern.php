<?php

namespace App\DesignPatterns\Structural\Bridge;

use App\DesignPatterns\Structural\Bridge\WithBridge\WithBridgeDemo;
use App\DesignPatterns\Structural\Bridge\WithoutBridge\WithoutBridgeDemo;

class AboutPattern extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'Bridge';
    }

    public function description(): string
    {
        return 'Структурний шаблон проектування, який дозволяє вам розділити великий клас або набір тісно пов’язаних класів на дві окремі ієрархії — абстракцію та реалізацію, — які можна розробляти незалежно одна від одної.';
    }

    public function example()
    {
        echo $this->textFormatter->image(asset('images/patterns/bridge.png'));

//        (new WithoutBridgeDemo())->run();
        (new WithBridgeDemo())->run();
    }
}
