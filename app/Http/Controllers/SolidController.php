<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolidController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('solid');
    }
}
