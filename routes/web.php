<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


 Route::get('/shop', [UserController::class, 'index']);
    return view('shop'); ;

