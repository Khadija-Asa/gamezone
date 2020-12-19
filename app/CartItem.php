<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class CartItem extends Model
{
    protected $fillable = ([
        'quantity', 'product_id', 'cart_id'
    ]);

    public function product() {
      return $this->belongsTo(Product::class);
    }
}
