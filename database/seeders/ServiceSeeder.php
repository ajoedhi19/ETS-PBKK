<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['nama_layanan' => 'Potong Rambut',
             'harga' => '50000'
            ],
            ['nama_layanan' => 'cream bath',
            'harga' => '200000'
            ],
            ['nama_layanan' => 'coloring',
            'harga' => '500000'],
            ['nama_layanan' => 'Spa',
            'harga' => '500000']
        ]);
    }
}