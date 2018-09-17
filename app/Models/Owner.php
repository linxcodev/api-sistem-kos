<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  protected $guarded = [];

  public function rooms()
  {
    return $this->hasMany('App\Models\Room');
  }
}
