<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) { 
            $uuid = $faker->uuid;
            $pass = $faker->password;
            DB::table('users')->insert([
                'id' => $uuid,
                'username' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                
                'password' => bcrypt($pass),
                'word' => $pass,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            );


        }
    }
}
