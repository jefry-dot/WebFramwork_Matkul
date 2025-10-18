<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'product_name' => 'test edit edit',
            'unit' => 'ltr',
            'type' => 'test',
            'information' => 'test',
            'qty' => 1,
            'producer' => 'test'
        ]);

        Product::create([
            'product_name' => 'sdsadsadas',
            'unit' => 'kg',
            'type' => 'sdsada',
            'information' => 'sdasdasdas',
            'qty' => 1,
            'producer' => 'sadsadas'
        ]);

        // Tambahkan data lainnya sesuai kebutuhan
    }
}