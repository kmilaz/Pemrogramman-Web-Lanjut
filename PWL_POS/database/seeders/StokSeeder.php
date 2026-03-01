<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 15; $i++) { 
            $temp = [
                'stok_id' => $i + 1,
                'barang_id' => ($i % 15) + 1,
                'user_id' => 1,
                'stok_tanggal' => fake()->date(),
                'stok_jumlah' => fake()->randomNumber(2),
            ];
            array_push($data, $temp);
        }
        DB::table('t_stok')->insert($data);
    }
}
