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

Route::get('/admin' , function(){
    return view('layouts.admin.index');
})->name('admin');

Route::get('/listKindRooms' , function(){
    return view('KindRooms.list');
})->name('listKindRooms');

Route::get('/createKindRooms' , function(){
    return view('KindRooms.create');
})->name('createKindRooms');

Route::get('/updateKindRooms' , function(){
    return view('KindRooms.update');
})->name('updateKindRooms');






