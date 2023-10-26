<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// uso faker
use Faker\Generator as Faker;

use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 5; $i++) {

            $type = new Type();
            $type->label = $faker->firstName();
            $type->color = $faker->hexColor();

            $type->save();
            //
        }
    }
}