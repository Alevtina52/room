<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login',[\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::get('/rooms', [\App\Http\Controllers\RoomController::class, 'index'])->middleware('auth')->name('rooms');
Route::get('/rooms/create', [\App\Http\Controllers\RoomController::class, 'create'])->middleware('auth')
    ->name('create_rooms');
Route::post('/rooms', [\App\Http\Controllers\RoomController::class, 'store'])->middleware('auth');
Route::get('/racpec/create', [\App\Http\Controllers\RacpecController::class, 'create'])->middleware('auth')
    ->name('racpec_create');

Route::post('/racpec/create', [\App\Http\Controllers\RacpecController::class, 'store'])->middleware('auth');
