<?php

use App\Http\Controllers\ChuyenMucController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/chuyen-muc/index',[ChuyenMucController::class,'index']);
Route::post('/admin/chuyen-muc/index',[ChuyenMucController::class,'store']);
Route::get('/admin/chuyen-muc/delete/{id}',[ChuyenMucController::class,'destroy']);
Route::get('/change-status/{id}', [ChuyenMucController::class, 'changeStatus']);


