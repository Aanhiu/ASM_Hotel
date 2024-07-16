<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/' , function(){
    return view('index');
});

// điều hướng đến trang giới thiệu
Route::get('/about' , function(){
    return view('layouts.about');
})->name('about');

Route::get('/home' , function(){
    return view('index');
})->name('home');

Route::get('/login' , function(){
    return view('layouts.login');
})->name('login');




