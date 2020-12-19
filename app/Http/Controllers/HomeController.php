<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Attraction;
use App\Article;
use App\Cart;

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
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return view('welcome', ['articles' => $articles]);
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
    public function pricelist()
    {
        return view('pricelist');
    }
    public function informations()
    {
        return view('informations');
    }
    public function game()
    {
        return view('game');
    }
    public function order($id) //L'id correspond ici au cart, d'où l'on peut retirer toutes les informations dont on a besoin
    {
        $cart = Cart::with(['user', 'cart_items'])->find($id);
        return view('order', ['cart' => $cart]);
    }
}
