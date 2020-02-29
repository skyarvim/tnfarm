<?php

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

Auth::routes(['verify' => true]);

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('/', 'Backend\WebsiteController', ['only' => 'index']);
    Route::resource('/user', 'Backend\UserController', ['only' => ['index', 'edit', 'update', 'destroy']]);
    Route::resource('/welcome', 'Backend\WelcomeController', ['except' => 'show']);
});

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/about', 'Frontend\AboutController@index')->name('about');

Route::prefix('user')->name('user.')->group(function() {
    Route::resource('/', 'Frontend\UserController', ['only' => ['index']]);
    Route::resource('/profile', 'Frontend\ProfileController', ['only' => ['show', 'edit', 'update']]);
    Route::resource('/product', 'Frontend\ProductController', ['except' => ['index']]);
    Route::resource('/order', 'Frontend\OrderController', ['except' => ['index']]);
});
