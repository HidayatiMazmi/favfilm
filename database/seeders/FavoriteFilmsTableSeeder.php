<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FavoriteFilm;
use DB;

class FavoriteFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        DB::table('favorite_films')->delete();

        $faker = \Faker\Factory::create();

        $userIDs = DB::table('users')->pluck('id');
        $filmIDs= DB::table('films')->pluck('id');

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            FavoriteFilm::create([
                'film_id' => $faker->randomElement($filmIDs),
                'user_id' => $faker->randomElement($userIDs),
            ]);
        }
    }
}
