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

Route::get('/', function () {
    return view('welcome');
});


Route::get('hallo', function () {
    return view("Hallo hahahahahha");
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('login', 'LoginController@index');
   