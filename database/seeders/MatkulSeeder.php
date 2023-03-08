<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
            [
                'kode'=>'RTI214008',
                'nama'=>'Pemrograman Web Lanjut',
                'dosen'=>'Moch. Zawwaruddin Abdullah, S.ST., M.Kom.',
                'sks' => '3'
            ],
            [
                'kode'=>'RTI214005',
                'nama'=>'Business Intelligence',
                'dosen'=>'Endah Septa Sintiya, S.Pd., M.Kom.',
                'sks'=>'2'
            ],
            [
                'kode'=>'RTI214006',
                'nama'=>'Jaringan Komputer',
                'dosen'=>'Kadek Suarjuana Batubulan, S.Kom., M.T.',
                'sks'=>'2'
            ],
            [
                'kode'=>'RTI214004',
                'nama'=>'Proyek 1',
                'dosen'=>'Farid Angga Pribadi, S.Kom., M.Kom.',
                'sks'=>'3'
            ],
            [
                'kode'=>'RTI214003',
                'nama'=>'Manajemen Proyek',
                'dosen'=>'Candra Bella Vista S.Kom., M.T.',
                'sks'=>'2'
            ]
        ]);
    }
}
