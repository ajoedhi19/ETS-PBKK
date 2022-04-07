<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            ['nama_produk' => 'Pomade Rajawali',
             'harga' => '150000'
            ],
            ['nama_produk' => 'Hair Powder',
            'harga' => '200000']
        ]);
    }
}