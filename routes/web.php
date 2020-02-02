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
Route::get('/about', 'Frontend\AboutController@index')->name('about');

Route::get('/admin/login', function () {
    return view('backend.login');
});
Route::post('/admin/login', 'Auth\LoginController@login')->name('login');
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function() {
    Route::get('/admin/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/', 'Backend\WebsiteController@index')->name('website');
    Route::resource('/welcome', 'Backend\WelcomeController', ['except'=> ['show']]);
});
