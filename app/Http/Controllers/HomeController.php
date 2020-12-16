<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function mention()
    {
        return view('mention');
    }
    public function map()
    {
        return view('map');
    }
    public function sale()
    {
        return view('sale');
    }
}
