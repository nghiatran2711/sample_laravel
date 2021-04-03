<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
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
Route::get('/home',function(){
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
    Route::get('/list', [CategoryController::class, 'index'])->name('index');
    Route::get('/create', [CategoryController::class, 'create'])->name('create');
    Route::post('/store', [CategoryController::class, 'store'])->name('store');
    Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    Route::get('/search', [CategoryController::class, 'search'])->name('search');
});

Route::group(['prefix' => 'post', 'as' => 'post.'], function () {
    Route::get('/list', [PostController::class, 'index'])->name('index');
    Route::get('/create', [PostController::class, 'create'])->name('create');
    Route::post('/store', [PostController::class, 'store'])->name('store');
    Route::get('/show/{id}', [PostController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PostController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
    Route::get('/search', [PostController::class, 'search'])->name('search');
});
Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/list', [UserController::class, 'index'])->name('index');
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
});

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