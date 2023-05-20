<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    //protected $primaryKey='id;
    //protected $keyType = 'int';
    public $fillable = [
        'nim',
        'nama',
        'kelas_id',
        'jk',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'hp', 
        'foto',
    ];

    public function kelas() {
        return $this->belongsTo(Kelas::class);
    }
}
