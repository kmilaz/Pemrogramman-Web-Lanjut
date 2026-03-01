<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 5; $i++) { 
            $temp = [
                'kategori_id' => $i + 1,
                'kategori_kode' => fake()->lexify('???'),
                'kategori_nama' => 'Kategori ' . fake()->word(),
            ];
            array_push($data, $temp);
        }
        DB::table('m_kategori')->insert($data);
    }
}
