<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home() {
        return view('home', ['name' => 'Salma']);
    }

    public function product() {
        return view('product', ['name' => 'Produk']);
    }

    public function news() {
        return view('news', ['name' => 'Berita Terbaru']);
    }

    public function program() {
        return view('program', ['name' => 'Program']);
    }
    
    public function about() {
        return view('about-us', [
            'no' => '0878395972512',
            'email' => 'salmaanna@polinema.ac.id']);
    }
}