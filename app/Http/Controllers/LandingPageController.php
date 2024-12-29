<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
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

        $portfolios = Portfolio::with('category')->inRandomOrder()->limit(10)->get();

        $clients = Client::inRandomOrder()->get();

        return view('welcome', compact('hero', 'title', 'animation', 'services', 'portfolios', 'clients'));
    }
}
