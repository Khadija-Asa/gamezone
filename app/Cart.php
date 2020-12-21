<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\CartItem;

class Cart extends Model
{
    protected $fillable = ([
        'status', 'user_id'
    ]);

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function cart_items(){
      return $this->hasMany(CartItem::class);
    }
}
