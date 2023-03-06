<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol' => 'AG1234RR',
                'merk' => 'Lamborghini',
                'jenis' => 'Aventador',
                'tahun' => '2020',
                'warna' => 'Red'
            ],
            [
                'nopol' => 'AG1111YA',
                'merk' => 'Porsche',
                'jenis' => 'Cayenne',
                'tahun' => '2019',
                'warna' => 'White'
            ],
        ]);
    }
}