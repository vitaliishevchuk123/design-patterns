<?php

namespace App\Http\Controllers;

use App\DesignPatterns\PatternFactory;
use Illuminate\Http\Request;

class PatternsDescriptionController extends Controller
{
    /**
     * @throws \Exception
     */
    public function __invoke(Request $request, ?string $url = 'property-container')
    {
        $patternDescription = (new PatternFactory())->handle($url);
        return view('main', compact('patternDescription'));
    }
}
