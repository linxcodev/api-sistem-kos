<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('owner')->group(function() {
  Route::get('/dasboard', 'OwnerController@dasboard')->name('owner.dasboard');
  Route::get('/login', 'AuthOwner\LoginController@showLoginForm')->name('owner.login');
  Route::post('/login', 'AuthOwner\LoginController@login')->name('owner.login.submit');
});

Route::get('room/edit', 'RoomController@edit')->name('room.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
