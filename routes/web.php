<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ControllerPage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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

//Route::get('/', [PageController::class, 'index']);

//Route::get('/about', [PageController::class, 'about']);

//Route::get('/articles/{id}', [PageController::class, 'articles']);

//no 3
Route::get('/', [HomeController::class, 'index']);
Route::get('/', [AboutController::class, 'about']);
Route::get('/articles/{id}', [ArticlesController::class, 'articles']);

//praktikum 3

    Route::get('/home', function () {
        return 'Selamat Datang guys...';
    });

    Route::prefix('product')->group(function () {
        Route::get('/list', [PageController::class, 'product']);
    });