<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    //
    public function index()
    {
        $hero = \App\Models\Hero::where('isActive', true)->first();

        [$title, $animation] = explode('|', $hero->title);
        $animation = explode('#', $animation);

        $services = Service::orderBy('sort')->get();
        return view('welcome', compact('hero', 'title', 'animation', 'services'));
    }
}
