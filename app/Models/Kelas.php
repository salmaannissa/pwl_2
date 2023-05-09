<?php

namespace App\Models;

use Database\Seeders\MahasiswaSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table='kelas';

    public function mahasiswa() {
        return $this->hasMany(Mahasiswa::class);
    }
}
