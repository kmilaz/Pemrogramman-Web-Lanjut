<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i=0; $i < 3; $i++) { 
            $temp = [
                'supplier_id' => $i + 1,
                'supplier_kode' => fake()->lexify('???'),
                'supplier_nama' => 'Supplier ' . fake()->word(),
                'supplier_alamat' => fake()->address(),
            ];
            array_push($data, $temp);
        }
        DB::table('m_supplier')->insert($data);
    }
}
