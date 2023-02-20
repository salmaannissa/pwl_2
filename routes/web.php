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

Route::get('/', function () {
  return view('welcome');
});

//praktikum 1

Route::get('/', function(){
    echo "Selamat Datang";
});

Route::get('/about', function (){
    echo "Nama : Salma Annissa Azizi";
    echo "<br> NIM : 2141720137";
});

Route::get('/articles/{id}', function($id){
    echo 'Halaman artikel dengan ID '; return $id;
});

//praktikum 2
Route::get('/', [PageController::class, 'index']);