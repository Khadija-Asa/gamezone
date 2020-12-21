<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AddressesUser;
use App\Cart;
use App\CartItem;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return view('User.index', ['users' => $users]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::all()->find($id);
      return view('User.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::all()->find($id);
      return view('User.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $user->fill($request->all());
      $user->save();
      return redirect()->route('User.show', ['User' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      AddressesUser::where('user_id', $id)->delete(); //On supprime toutes les relations d'adresses
      $deleteCarts = Cart::all()->where('user_id', $id); //On selectionne tous les paniers
      $items = CartItem::all()->where('cart_id', $deleteCarts[0]['id']); //On selectionne tous les items dans les paniers
      foreach ($items as $item) { //Pour chaque item trouvé, on le supprime
        $item->delete();
      }
      foreach ($deleteCarts as $deleteCart) { //Pour chaque panier trouvé, on le supprime
        $deleteCart->delete();
      }
      $user = User::find($id); 
      $user->delete(); //On peut maintenant supprimer l'utilisateur

      return redirect()->route('User.index');
    }
}
