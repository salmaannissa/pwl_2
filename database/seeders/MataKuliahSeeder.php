<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matakuliah')->insert([
            [
                'nama_matkul' => 'Pemrograman Web Lanjut',
                'sks' => 3,
                'jam'=> 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Proyek 1',
                'sks' => 6,
                'jam'=> 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'ADBO',
                'sks' => 2,
                'jam'=> 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Manajemen Proyek',
                'sks' => 6,
                'jam'=> 6,
                'semester' => 4
            ],
        ]);
    }
}

