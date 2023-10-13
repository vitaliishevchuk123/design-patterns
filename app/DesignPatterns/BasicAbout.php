<?php

namespace App\DesignPatterns;

class BasicAbout extends \App\DesignPatterns\AbstractAboutPattern
{
    public function name(): string
    {
        return 'About';
    }

    public function description(): string
    {
        return 'Патерни (або шаблони) проектування описують типові способи вирішення поширених проблем при проектуванні програм.';
    }

    public function example()
    {
        echo $this->textFormatter->imageCustom(asset('images/patterns/design-patterns-using.png'), 'mt-4 rounded-md h-32 hover:scale-150 transition duration-500');
    }
}
