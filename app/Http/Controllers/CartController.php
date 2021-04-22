<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function view(){
        return view('cart.view_cart');
    }
}
