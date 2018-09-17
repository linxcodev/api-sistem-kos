<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Detail;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function store(Request $req)
  {
    $req->validate([
      'name' => 'required', 'city' => 'required', 'price' => 'required|integer'
    ]);

    $req->validate([
      'luas_kamar' => 'required|integer', 'description' => 'required'
    ]);

    $room = Room::create([
      'name' => $req->json('name'), 'city' => $req->json('city'),
      'price' => $req->json('price'), 'owner_id' => $req->json('owner_id')
    ]);

    $detail = Detail::create([
      'fasilitas_kamar' => $req->json('fasilitas_kamar'),
      'luas_kamar' => $req->json('luas_kamar'),
      'kamar_mandi' => $req->json('kamar_mandi'),
      'fasilitas_umum' => $req->json('fasilitas_umum'),
      'fasilitas_parkir' => $req->json('fasilitas_parkir'),
      'description' => $req->json('description'),
      'room_id' => $room->id
    ]);

    $room = json_decode($room);
    $detail = json_decode($detail);

    return response()->json(['room' => $room, 'detail' => $detail]);
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
