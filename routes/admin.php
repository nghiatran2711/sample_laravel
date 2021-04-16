<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

	Route::middleware(['adminauth','guest:admin'])->group(function(){
		Route::get('login', [AuthController::class, 'getLogin'])->name('login');
		Route::post('login', [AuthController::class, 'postLogin'])->name('login.handle');
		
	});
	Route::middleware(['adminauth','auth:admin'])->group(function(){
		Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');	
		Route::post('logout', [AuthController::class, 'logout'])->name('logout');
		//Category
		Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
			Route::get('/list', [CategoryController::class, 'index'])->name('index');
			Route::get('/create', [CategoryController::class, 'create'])->name('create');
			Route::post('/store', [CategoryController::class, 'store'])->name('store');
			Route::get('/show/{id}', [CategoryController::class, 'show'])->name('show');
			Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
			Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
			Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
			// Route::get('/search', [CategoryController::class, 'search'])->name('search');
	
			Route::get('/search-ajax',[CategoryController::class,'search_ajax'])->name('search_ajax_category');
		});
		// Post
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
	});
	