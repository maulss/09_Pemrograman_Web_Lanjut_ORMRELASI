<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matkul = [
            [
                'nama_matkul' => 'Pemograman Berbasis Objek',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Pemograman Web Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Basis Data Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
            [
                'nama_matkul' => 'Pratikum Basis Data Lanjut',
                'sks' => 3,
                'jam' => 6,
                'semester' => 4
            ],
        ];

        DB::table('matakuliah')->insert($matkul);
    }
}
