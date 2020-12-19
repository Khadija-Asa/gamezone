<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'quantity'=>'required'
        ]);
        $id = $request->get('product_id');

        $user_id = Auth::user()->id; //On récupère l'id de l'utilisateur
        $cartExists = Cart::where('user_id', $user_id)->where('status', 'pending')->count(); //Compter le nombre de paniers qui ont l'id de l'utilisateur ET le statut "pending"
        $lastInsertedId = 0; //Initilisation de l'id du panier
  
        if ($cartExists == 0) { //S'il n'existe pas, on le créé
          $cart = new Cart([
              'status' => 'pending',
              'user_id' => $user_id
          ]);
          $cart->save();
          $lastInsertedId = $cart->id; //et on récupère son id
        } else { // Si le panier existe, on récupère son id
          $queryId = Cart::where('user_id', $user_id)->where('status', 'pending')->first();
          $lastInsertedId = $queryId->id;
        }
  
        $productExists = CartItem::where('cart_id', $lastInsertedId)->where('product_id', $id)->count(); //Savoir si ce produit est déjà présent
        $quantity = $request->get('quantity');

        if($productExists == 1) { //Si le produit est présent, on update la quantité
          $currentQuantity = CartItem::where('cart_id', $lastInsertedId)->where('product_id', $id)->get(['quantity']);
          $quantity += $currentQuantity[0]->quantity;
          CartItem::where('cart_id', $lastInsertedId)->where('product_id', $id)->update(['quantity' => $quantity]);
        } else { //Sinon créé le produit dans le cart
          $cartItem = new CartItem([
              'quantity' => $quantity,
              'product_id' => $id,
              'cart_id' => $lastInsertedId
          ]);
          $cartItem->save();
        }
  
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function show(CartItem $cartItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function edit(CartItem $cartItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartItem $cartItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CartItem  $cartItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartItem $cartItem)
    {
        //
    }
}
