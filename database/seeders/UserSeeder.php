<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//import class
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "killa",
            "email" => "killa@yahoo.com",
            "password" => Hash::make("12345"),
        ]);
   }
}
