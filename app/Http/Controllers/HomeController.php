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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function mention()
    {
        return view('mention');
    }
    public function map()
    {
        return view('map');
    }
    public function recruitment()
    {
        return view('recruitment');
    }
    public function cookies()
    {
        return view('cookies');
    }
    public function legal()
    {
        return view('legal');
    }
    public function sale()
    {
        return view('sale');
    }
<<<<<<< HEAD
<<<<<<< HEAD
    public function pricelist()
    {
        return view('pricelist');
    }
=======
>>>>>>> game added
=======
>>>>>>> c1d421440c86e471da5b895ba49f00d981ebb572
    public function game()
    {
        return view('game');
    }
}
