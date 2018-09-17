<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function store(Request $req)
  {
    $req->validate([
      'name' => 'required',
      'city' => 'required',
      'price' => 'required|integer'
    ]);

    return Room::create([
      'name' => $req->json('name'),
      'city' => $req->json('city'),
      'price' => $req->json('price'),
      'owner_id' => $req->json('owner_id')
    ]);
  }

  public function update(Request $req, $id)
  {
    $req->validate([
      'name' => 'required',
      'city' => 'required',
      'price' => 'required|integer'
    ]);

    $room = Room::find($id);

    $room->update([
      'name' => $req->json('name'),
      'city' => $req->json('city'),
      'price' => $req->json('price'),
      'owner_id' => $req->json('owner_id')
    ]);

    return $room;
  }

  public function destroy($id)
  {
    Room::destroy($id);

    return response()->json(["message" => "success"]);
  }
}
