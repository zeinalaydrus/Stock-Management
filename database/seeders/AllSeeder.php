<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Raw;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Raw::create([
            'image' => '/storage/post-image/semen.jpg',
            'name' => 'Semen',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Raw::create([
            'image' => 'pasir.webp',
            'name' => 'Pasir Bangka',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Raw::create([
            'image' => 'bata.jfif',
            'name' => 'Abu Bata',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Raw::create([
            'image' => 'aditif.jfif',
            'name' => 'Aditif',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Product::create([
            'image' => '',
            'name' => 'Kansten',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Product::create([
            'image' => '',
            'name' => 'UDITICH',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Product::create([
            'image' => 'img/',
            'name' => 'BUIS',
            'stock' => '0',
            'description' => 'ini barang'
        ]);

        Product::create([
            'image' => 'img/',
            'name' => 'Gutter Air',
            'stock' => '0',
            'description' => 'ini barang'
        ]);
    }
}
