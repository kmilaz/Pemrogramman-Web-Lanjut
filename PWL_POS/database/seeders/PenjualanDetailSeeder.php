<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 30; $i++) { 
            $temp = [
                'detail_id' => $i + 1,
                'penjualan_id' => ($i % 10) + 1,
                'barang_id' => ($i % 15) + 1,
                'jumlah' => fake()->randomNumber(2),
                'harga' => fake()->randomNumber(5),
            ];
            array_push($data, $temp);
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}
