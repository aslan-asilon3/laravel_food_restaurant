<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Food::create([

            'image' => 'img1',
            'foodName' => 'Nasi Goreng',
            'price' => 80000,
            'foodRate' => '8',
            'foodOrigin' => 'Indonesia',
            'foodDiscount' => '80%',
            'foodDescription' => 'nice',

        ]);

        Food::create([

            'image' => 'img2',
            'foodName' => 'Spaggheti',
            'price' => 100000,
            'foodRate' => '9',
            'foodOrigin' => 'Italy',
            'foodDiscount' => '-',
            'foodDescription' => 'Excellent',

        ]);
    }
}
