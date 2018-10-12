<?php

Route::middleware(['api'])->group(function () {
  // room
  Route::post('rooms', 'RoomController@store')->name('room.store');
  Route::put('rooms/{id}', 'RoomController@update');
  Route::delete('rooms/{id}', 'RoomController@destroy');

  // usr
  Route::get('rooms', 'UserController@index');
  Route::get('rooms/search', 'UserController@search');
  Route::get('rooms/price', 'UserController@listPrice');
  Route::get('rooms/avl/{id}', 'UserController@listAvl');
  Route::get('rooms/{id}/detail', 'UserController@detailRoom');
});
