<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\StudentController;

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

//**Bagian Praktikum**
//Kita melalui controller terlebih dahulu
//Ketika kita mengakses url /beranda dengan method get
//maka kita akan diarahkan ke controller
//dengan nama classnya adalah myController
//dan methodnya adalah indexp

//Penulisan di laravel 7
//Route::get('/berandaprak', 'myController@index');

//Penulisan di laravel 8
Route::get('/beranda', [myController::class, 'index']);

//Kita langsung ke view nya
//Route::view('/berandaprak', 'berandaprak');

Route::get('/mahasiswa', [StudentController::class, 'index']);
Route::get('/mahasiswa/create', [StudentController::class, 'create']);
Route::post('/mahasiswa/create', [StudentController::class, 'store']);
Route::get('/mahasiswa/{id}/edit', [StudentController::class, 'edit']);
Route::put('/mahasiswa/{id}/edit', [StudentController::class, 'update']);
Route::delete('/mahasiswa/hapus/{id}', [StudentController::class, 'destroy']);

