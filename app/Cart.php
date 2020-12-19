<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Cart extends Model
{
    protected $fillable = ([
        'status', 'user_id'
    ]);

    public function user(){
      return $this->belongsTo(User::class);
    }
}
