<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatkulModel extends Model
{
    use HasFactory;
    protected $table = 'matakuliah';
    protected $fillable = [
        'nama_matkul', 'sks', 'jam', 'semester'
    ];

    public function mhs_matkul(){
        return $this->hasMany(Mahasiswa_MataKuliah::class);
    }
}
