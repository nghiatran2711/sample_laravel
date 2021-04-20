<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';

//Sign up
Route::get('/signup-form',function(){
    return view('signup.signup');
});
Route::post('/signup', function (Request $request){ 
    // $datarequest=$request->all();
    // $dataInsert=[
    //     'first_name'=>$request['first_name'],
    //     'utm'=>$request['utm'],
    //     'age'=>$request['age']
    // ];
    // var_dump($request->except('_token'));
    // $request->except(['_token']);
    if($request->hasFile('thumbnail')&& $request->file('thumbnail')->isValid()){
        echo 'File OK';
        $extension=$request->thumbnail->extension();
        $fileName='thumbnail_'.time().'.'.$extension;
        var_dump($fileName);

        //save folder /public/image/$fileName
        $path=$request->thumbnail->storeAs('images',$fileName);
        var_dump($path);
    }
    // $imageName = time().'.'.$request->thumbnail->extension();
    dd($request);
});