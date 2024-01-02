<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function show($domain)
    {
        return view('pages.configuration', compact('domain'));
    }
}
