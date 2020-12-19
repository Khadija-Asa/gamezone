<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

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

    public function getAddresses() {
        return $this->hasMany(AddressesUser::class);
    }
}
