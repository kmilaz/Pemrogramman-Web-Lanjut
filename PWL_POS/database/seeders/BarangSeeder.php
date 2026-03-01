<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 15; $i++) { 
            $temp = [
                'barang_id' => $i + 1,
                'kategori_id' => ($i % 5) + 1,
                'barang_kode' => fake()->lexify('???'),
                'barang_nama' => 'Barang ' . fake()->word(),
                'harga_beli' => fake()->randomNumber(5),
                'harga_jual' => fake()->randomNumber(5),
            ];
            array_push($data, $temp);
        }
        DB::table('m_barang')->insert($data);
    }
}
