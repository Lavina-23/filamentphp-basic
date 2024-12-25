<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $hero = \App\Models\Hero::where('isActive', true)->first();
        return view('welcome', compact('hero'));
    }
}
