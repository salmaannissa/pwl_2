<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileContoller extends Controller
{
    public function index() {
        return view ('profile')
        ->with('name', 'Salma Annissa Azizi')
        ->with('nickname', 'Salma')
        ->with('nim', '2141720137')
        ->with('class', 'TI-2B')
        ->with('absen', '23')
        ->with('prodi', 'Teknik Informatika')
        ->with('jurusan', 'Teknologi Informasi')
        ->with('college', 'Politeknik Negeri Malang');
    }
}
