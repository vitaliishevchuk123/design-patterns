<?php

namespace App\Helpers;

class TextFormatter
{
    public function pGrayText(string $text): string
    {
        return '<p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">' . $text . '</p>';
    }

    public function h3White(string $text): string
    {
        return '<h2 class="mt-6 text-l font-semibold text-gray-900 dark:text-white">' . $text . '</h2>';
    }

    public function image(string $path): string
    {
        return '<img src="' . $path . '" class="mt-6 h-auto max-w-full" alt="..."/>';
    }

    public function imageCustom(string $path, string $class): string
    {
        return '<img src="' . $path . '" class="' . $class . '" alt="..."/>';
    }

    public function zoomImage(string $path): string
    {
        return '<img src="' . $path . '"class="mt-6 h-auto max-w-full hover:scale-150 transition duration-500" alt="..."/>';
    }
}
