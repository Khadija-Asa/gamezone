<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\CartItem;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nickname', 'password', 'email', 'first_name', 'last_name', 'city', 'avatar', 'exp', 'admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getIdCart() {
        $cart = Cart::select('id')->where('user_id', Auth::user()->id)->where('status', 'pending')->get();
        return $cart;
    }

    public function numberItems() {
      $items = CartItem::where('cart_id', Auth::user()->getIdCart()[0]['id'])->sum('quantity');
      return $items;
    }

    public function getAddresses() {
        return $this->hasMany(AddressesUser::class);
    }
}
