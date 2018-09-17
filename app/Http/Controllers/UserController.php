<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\User;
use App\Models\Detail;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return Room::all();
  }

  public function search(Request $req)
  {
    $search = $req->input('q');

    return Room::where('name', 'LIKE', '%' . $search . '%')
    ->orWhere('city', 'LIKE', '%' . $search . '%')
    ->orWhere('price', 'LIKE', '%' . $search . '%')->get();
  }

  public function listPrice()
  {
    return Room::orderBy('price')->get();
  }

  public function listAvl($id)
  {
    $user = User::find($id);

    if ($user->credit >= 5) {
      $hasil = $user->credit - 5;
      $user->update(['credit' => $hasil]);

      return Room::orderBy('user_id')->get();
    }

    return response()->json(['message' => 'your credit null']);
  }

  public function detailRoom($id)
  {
    return Detail::where('room_id', $id)->get();
  }
}
