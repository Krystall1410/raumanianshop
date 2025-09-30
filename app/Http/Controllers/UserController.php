<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(request $request) {
       return view('user.shop', compact('products'));
    }
}
