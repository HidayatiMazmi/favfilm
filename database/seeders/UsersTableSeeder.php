<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        DB::table('users')->delete();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('test');

        User::create([
            'first_name' => 'Super',
            'last_name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@test.com',
            'password' => $password,
            'role' => 'Admin',
        ]);

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->firstNameFemale,
                'last_name' => $faker->lastName,
                'username' => $faker->username,
                'email' => $faker->email,
                'password' => $password,
                'role' => 'User',
            ]);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
