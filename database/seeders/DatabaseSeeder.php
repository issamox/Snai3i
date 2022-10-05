<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Job;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Job::factory(14)->create();
        City::factory(8)->create();
        User::factory(20)->create();
        Service::factory(200)->create();
        Review::factory(100)->create();
      //  Service::factory(200)->create();

        /*$services = Service::all();
        User::all()->each(function ($user) use ($services) {
            $user->services()->attach(
                $services->random(rand(1, 15))->pluck('id')->toArray()
            );
        });*/
    }
}
