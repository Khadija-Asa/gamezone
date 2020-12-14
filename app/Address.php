<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $fillable = [
      'zip_code', 'city', 'country', 'first_name', 'type'
  ];
}
