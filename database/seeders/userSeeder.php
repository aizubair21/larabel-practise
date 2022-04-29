<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'amimul',
            'user_name'=>'amimul21',
            'email'=>'amimul@example.xyz',
            'password'=>'password',
        ]);
    }
}
