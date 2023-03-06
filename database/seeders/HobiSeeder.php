<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'hobi' => 'Bernyanyi',
                'alasan' => 'Karena suara saya bagus.'
            ],
            [
                'hobi' => 'Bermain Gitar',
                'alasan' => 'Karena saya pandai bernyanyi.'
            ],
            [
                'hobi' => 'Mendengarkan lagu',
                'alasan' => 'Karena saya suka lagu.'
            ],
            [
                'hobi' => 'Menonton film',
                'alasan' => 'Karena saya penggemar film dan series.'
            ],
            [
                'hobi' => 'Membaca buku fiksi',
                'alasan' => 'Karena saya suka membaca buku fiksi <3.'
            ]
        ]);
    }
}
