<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'RoomController@index');
Route::view('/view/room', 'viewRoom')->name('view.room');
Route::view('/reservation','reservationForm')->name('reservation.form');
Route::post('/reservation','BookingController@store')->name('reservation');
