<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FoodOrigin;

class FoodOriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodOrigin::create([
            'food_id' => '1',
            'foodOrigin' => 'United State',
            'image' => 'img1',
        ]);

        FoodOrigin::create([
            'food_id' => '2',
            'foodOrigin' => 'China',
            'image' => 'img2',
        ]);
    }
}
