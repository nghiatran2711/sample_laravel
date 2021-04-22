<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    //
    public function view_check_out(){
        return view('check-out.view-check-out');
    }
}
