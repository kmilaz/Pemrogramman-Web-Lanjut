<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 10; $i++) { 
            $temp = [
                'penjualan_id' => $i + 1,
                'user_id' => 3,
                'pembeli' => fake()->name(),
                'penjualan_kode' => fake()->lexify('???'),
                'penjualan_tanggal' => fake()->date(),
            ];
            array_push($data, $temp);
        }
        DB::table('t_penjualan')->insert($data);
    }
}
