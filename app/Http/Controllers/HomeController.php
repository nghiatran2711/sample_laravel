<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $data=[];
        $categories=Category::get();
        $posts=Post::limit(6)->get();
        $data['categories']=$categories;
        $data['posts']=$posts;
        return view('home',$data);

    }
}
