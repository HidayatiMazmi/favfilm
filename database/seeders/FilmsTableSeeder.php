<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        DB::table('films')->delete();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Film::create([
                'title_film' => $faker->sentence,
                'synopsis' => $faker->paragraph,
                'rating' => $faker->biasedNumberBetween($min = 1, $max = 5, $function = 'sqrt'),
                'tanggal_tayang' => $faker->dateTime($max = 'now', $timezone = null),
            ]);
        }
    }
}
