<?php

namespace App\DesignPatterns;

use App\Helpers\TextFormatter;

abstract class AbstractAboutPattern implements AboutPattern
{
    public TextFormatter $textFormatter;

    public function __construct()
    {
        $this->textFormatter = new TextFormatter();
    }
}
