<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;

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

//routing Beranda 
Route::get('/',[BerandaController::class, 'index']);
Route::get('/beranda',[BerandaController::class, 'index']);

//routing Buku 
Route::get('/buku',[BukuController::class,'index']);
Route::get('/tambah_buku',[BukuController::class,'create']);
Route::post('/tambah_buku',[BukuController::class,'store']);
Route::get('/edit_buku/{id}',[BukuController::class,'edit']);
Route::post('/edit_buku/{id}',[BukuController::class,'update']);
Route::get('/delete_buku/{id}',[BukuController::class,'destroy']);

//routing login
Route::get('/login', [LoginController::class, 'index']);