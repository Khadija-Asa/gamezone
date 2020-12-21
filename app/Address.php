<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
      'address', 'zip_code', 'city', 'country'
  ];

  public function addresses(){
    return $this->hasMany(AddressesUser::class, 'user_id');
  }
}
