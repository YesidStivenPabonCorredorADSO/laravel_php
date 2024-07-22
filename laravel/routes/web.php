<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',[UserController::Class,"index"])->name("users.index");
Route::get('/create',[UserController::Class,"create"])->name("users.create");
Route::post('/store',[UserController::Class,"store"])->name("users.store");
Route::get('/edit/{id}',[UserController::Class,"edit"])->name("users.edit");
Route::post('/update/{id}',[UserController::Class,"edit"])->name("users.update");