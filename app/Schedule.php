<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = ([
      'day', 'start_hour', 'end_hour'
    ]);
}
