<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipsController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('laravel-tips');
    }
}
