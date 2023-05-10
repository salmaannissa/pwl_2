<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'nilai_khs';

    public function mahasiswa(){
        return $this->belongsTo(MahasiswaModel::class);
    }

    public function matkul(){
        return $this->belongsTo(MatkulModel::class, 'matkul_id', 'id');
    }

    public function mahasiswa_matkul(){
        return $this->belongsTo(Mahasiswa_MataKuliah::class);
    }

}
