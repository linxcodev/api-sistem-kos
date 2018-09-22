<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Room;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:owner');
  }

  public function dasboard()
  {
    $owner = Room::where('owner_id', Auth::id())->get();

    return view('owner.dasboard', ['owners' => $owner]);
  }
}
