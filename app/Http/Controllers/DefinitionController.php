<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('definition');
    }
}
