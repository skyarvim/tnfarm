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

Route::get('/', 'Frontend\HomeController@index')->name('home');
#Route::get('/about', 'Frontend\AboutController@index')->name('about')->middleware('verified');

Auth::routes(['verify' => true]);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
    Route::resource('/', 'Backend\WebsiteController', ['only' => 'index'])->middleware('isadmin');
    Route::resource('/user', 'Backend\UserController', ['only' => 'index'])->middleware('isadmin');
    Route::resource('/welcome', 'Backend\WelcomeController', ['except' => 'show'])->middleware('isadmin');
});
