<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $guarded = [];

  public function owner()
  {
    return $this->belongsTo('App\Models\Owner');
  }
}
