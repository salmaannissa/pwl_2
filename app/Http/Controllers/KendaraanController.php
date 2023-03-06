<?php

namespace App\Http\Controllers;

use App\Models\KendaraanModel;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index() {
        $data = KendaraanModel::all();
        return view('kendaraan')
        ->with('kend', $data);
    }
}
