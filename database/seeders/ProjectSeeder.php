<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// importo il modello dei progetti
use App\Models\Project;

// uso faker
use Faker\Generator as Faker;

// uso anche la classe STR
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {

            $project = new Project();
            $project->name = $faker->sentence(2, true);
            $project->slug = Str::slug($project->name);
            $project->git_url = $faker->url();
            $project->description = $faker->paragraph(2, true);
            $project->created_at = $faker->dateTime();
            $project->type_id = $faker->numberBetween(0, 3);
            $project->save();
            //
        }
    }
}