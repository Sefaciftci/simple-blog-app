<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.home');
});


//register
Route::post('register', [UserController::class, 'registerFunc'])->name('register');
