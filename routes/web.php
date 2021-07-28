<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@about');
Route::get('/services', 'App\Http\Controllers\PagesController@services');

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/about', function () {
    return view('pages.about');
}); */

/* Route::post('/hello', function () {
    return "<h1>Hello world</h1>";
});

Route::get('/users/{name}', function ($name) {
    return "<h1>Hello world $name </h1>";
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', 'App\Http\Controllers\PostsController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
