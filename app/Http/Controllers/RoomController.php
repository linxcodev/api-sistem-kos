<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Detail;
use Illuminate\Http\Request;

class RoomController extends Controller
{
  public function store(Request $req)
  {
    $room = Room::create([
      'name' => $req->json('name'), 'city' => $req->json('city'),
      'price' => $req->json('price'), 'owner_id' => $req->json('id')
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

  public function edit()
  {
    // return "masuk pak eko";
    $id = request()->id;
    $room = Room::find($id);

    $detail = Detail::where('room_id', $id)->get();
    //
    $room = json_decode($room);
    $detail = json_decode($detail);
    // return $room.$detail;
    return response()->json([$room, $detail]);
  }

  public function update(Request $req, $id)
  {
    $room = Room::find($id);
    $detail = Detail::where('room_id', $id);

    $room->update([
      'name' => $req->json('name'), 'city' => $req->json('city'),
      'price' => $req->json('price')
    ]);

    $detail->update([
      'fasilitas_kamar' => $req->json('fasilitas_kamar'),
      'luas_kamar' => $req->json('luas_kamar'),
      'kamar_mandi' => $req->json('kamar_mandi'),
      'fasilitas_umum' => $req->json('fasilitas_umum'),
      'fasilitas_parkir' => $req->json('fasilitas_parkir'),
      'description' => $req->json('description'),
    ]);

    return 'success';
  }

  public function destroy($id)
  {
    Room::destroy($id);

    return response()->json(["message" => "success"]);
  }
}
