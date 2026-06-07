<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function portfolio()
    {
        $deals = config('portfolio', []);
        return view('pages.portfolio', compact('deals'));
    }

    public function process()
    {
        return view('pages.process');
    }

    public function legalities()
    {
        return view('pages.legalities');
    }

    public function locations()
    {
        return view('pages.locations');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
