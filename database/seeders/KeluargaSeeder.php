<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            ['nama' => 'Barno',
            'umur'=> '55',
            'hubungan' => 'Ayah',
            'pekerjaan' => 'Wiraswasta'],
            ['nama' => 'Christin Dianasari',
            'umur'=> '50',
            'hubungan' => 'Ibu',
            'pekerjaan' => 'Ibu Rumah Tangga'],
            ['nama' => 'Ryan Rizky H.',
            'umur'=> '25',
            'hubungan' => 'Saudara laki-laki',
            'pekerjaan' => 'Pegawai']
        ]);
    }
}
