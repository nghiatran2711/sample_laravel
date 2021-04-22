<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data=[];
        $categories=Category::get();
        $products=Product::limit(6)->get();
        $data['categories']=$categories;
        $data['products']=$products;
        return view('main.content',$data);

    }
}
