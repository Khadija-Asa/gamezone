<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    protected $fillable = ([
      'name', 'logo_url', 'bg_image_url', 'description', 'important_informations', 'min_height', 'exp_given'
    ]);
}