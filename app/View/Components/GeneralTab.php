<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class GeneralTab extends Component
{
    public array $list = [];

    public function __construct()
    {
        $this->setList();
    }

    private function setList()
    {
        $this->list = [
            [
                'name' => 'Design patterns',
                'active' => Route::currentRouteName() == 'patterns',
                'link' => route('patterns'),
            ],
            [
                'name' => 'Definitions',
                'active' => Route::currentRouteName() == 'definitions',
                'link' => route('definitions'),
            ],
            [
                'name' => 'SOLID',
                'active' => Route::currentRouteName() == 'solid',
                'link' => route('solid'),
            ],
            [
                'name' => 'Laravel tips',
                'active' => Route::currentRouteName() == 'laravel-tips',
                'link' => route('laravel-tips'),
            ],
            [
                'name' => 'Vue js',
                'active' => Route::currentRouteName() == 'vue-js',
                'link' => route('vue-js'),
            ],
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.general-tab');
    }
}
