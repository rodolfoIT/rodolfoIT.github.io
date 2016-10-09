<?php

use Carbon\Carbon;
use Faker\Factory;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserFollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        $users = User::pluck('id')->all();

        for ($i = 0; $i < 50; $i++) {
            DB::table('user_follower')->insert([
                'follower_id'  => $faker->randomElement($users),
                'user_id'      => $faker->randomElement($users),
                'created_at'   => Carbon::now(),
                'updated_at'   => Carbon::now(),
            ]);
        }
    }
}