<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        DB::table('users')->insert([
            'name' => 'Daniel van Droffelaar',
            'email' => 'daniel@realafford.nl',
            'password' => bcrypt('Welkom123'),
            'Role' => "Admin",
        ]);

        DB::table('users')->insert([
            'name' => 'Pieter Post',
            'email' => 'pietertje@gmail.com',
            'password' => bcrypt('Welkom123'),
        ]);
    }
}
