<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ControllerPage;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProfileContoller;
use App\Http\Controllers\WelcomeController;
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
    //no 1
    Route::get('/home', function () {
        return 'Selamat Datang guys...';
    });
    //no 2
    Route::prefix('product')->group(function () {
        Route::get('/list', [PageController::class, 'product']);
    });
    //no 3
    Route::get('news/{id}', function($id){
        echo "Daftar Berita : <br>
        <ul>
        
        <li><a href='https://www.educastudio.com/news'>Berita 1</a></li>
        <li><a href='https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19'>Berita 2</a></li>
        </ul>";
    });

    //no 4
    Route::prefix('program')->group(function () {
        Route::get('/DaftarProgram', [PageController::class, 'program']);
    });

    //no5
    Route::get('/TentangKami', function(){
        echo "Kami adalah mahasiswa Politeknik Negeri Malang yang sedang belajar 
        <br> Pemrograman Web Lanjut";
    });

    //no6
    //Route::resource('index', ControllerPage::class);

    //praktikum 3
    //Route::get('/hello', function() {
        //return view('hello', ['name' => 'Andi'])
        //return View::make('hello', ['name' => 'Mulan']);
        //return view('blog.hello', ['name' => 'Mulan']);
    //});

    //Route::get('/hello' ,[WelcomeController::class, 'hello']);

    //praktikum 1 no 1
    Route::get('/home' ,[WelcomeController::class, 'home']);
    //praktikum 1 no 2
    Route::prefix('product')->group(function () {
        Route::get('/list', [WelcomeController::class, 'product']);
    });
    //praktikum 1 no 3
    Route::get('/berita/{param}' ,[WelcomeController::class, 'news']);
    //praktikum 1 no 4
    Route::prefix('program')->group(function () {
        Route::get('/daftar', [WelcomeController::class, 'program']);
    }); 
    //praktikum 1 no 5
    Route::get('/ttgkami', [WelcomeController::class, 'about']);
    //praktikum 1 no 6
    Route::resource('index', ControllerPage::class);
    //praktikum 2
    Route::get('/', function(){
        return view('layouts.template');
    });

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileContoller::class, 'index']);
    Route::get('/pengalaman', [PengalamanController::class, 'index']);
    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/hobi', [HobiController::class, 'index']);