<?php

use App\Http\Controllers\CreateKindRoomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KindRoomsController;
use App\Http\Controllers\ListKindRoomsController;

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


// xuất list loại phòng
Route::get('/listKindRooms' , [KindRoomsController::class , 'getListKindRooms'])->name('listKindRooms');


// chuyen huong den form thêm mới loại phòng 
Route::get('/createKindRooms' , [KindRoomsController::class , 'CreateKindRooms'])->name('createKindRooms');


// insert du lieu loai phong vao from
Route::post('/storeKindRooms' , [KindRoomsController::class , 'storeKindRooms'])->name('storeKindRooms');

// xoa theo id loai phong
Route::delete('/deleteKindRooms/{id}' , [KindRoomsController::class , 'deleteKindRooms'])->name('deleteKindRooms');

// edit va do du lieu update do theo id
Route::get('/editKindRooms/{id}' , [KindRoomsController::class , 'editKindRooms'])->name('editKindRooms');

// an nut cap nhat update loai phong
Route::put('editKindRooms/{id}' , [KindRoomsController::class , 'updateKindRooms'])->name('updateKindRooms');








