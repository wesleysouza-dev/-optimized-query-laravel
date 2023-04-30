<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 1000; $i++) {
            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'description' => $faker->text,
                'user_id' => $faker->numberBetween(1,10),
                'created_at' => Carbon::now(),
            ]);
        }
    }
}
