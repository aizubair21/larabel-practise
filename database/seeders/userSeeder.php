<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;
use App\Models\User;
use App\Models\profile;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //make fake data using faker by Query Builder
        //All my factory data defined to UserFactory file
        // here i just call the factory

        //User::factory()->count(10)->create();

        profile::factory()->count(10)->create();
    }
}
