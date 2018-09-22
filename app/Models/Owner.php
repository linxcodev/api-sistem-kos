<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
  protected $guarded = [];

  protected $guard = 'owner';

  public function rooms()
  {
    return $this->hasMany('App\Models\Room');
  }
}
