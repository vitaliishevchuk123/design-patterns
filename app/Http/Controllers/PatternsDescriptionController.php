<?php

namespace App\Http\Controllers;

use App\DesignPatterns\PatternFactory;
use Illuminate\Http\Request;

class PatternsDescriptionController extends Controller
{
    /**
     * @throws \Exception
     */
    public function __invoke(Request $request, string $url = 'about')
    {
        $patternDescription = (new PatternFactory())->handle($url);
        return view('pattern', compact('patternDescription'));
    }
}
