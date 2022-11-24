<?php

namespace Database\Seeders;

use App\Models\Product;
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
        Product::create([
            'image' => 'assets/images/faces/1.jpg',
            'name' => 'Semen',
            'stock' => '100',
        ]);

        Product::create([
            'image' => 'assets/images/faces/2.jpg',
            'name' => 'Alat ringan',
            'stock' => '100',
        ]);

        Product::create([
            'image' => 'assets/images/faces/4.jpg',
            'name' => 'Alat Berat',
            'stock' => '100',
        ]);
    }
}
