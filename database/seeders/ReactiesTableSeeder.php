<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReactiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reacties')->insert([
            'eigenaar' => 1,
            'zoeker' => 2,
            'zoeker_naam' => "Pieter Post",
            'dier' => 4,
            'dier_naam' => "avocado"
        ]);

        DB::table('reacties')->insert([
            'eigenaar' => 1,
            'zoeker' => 3,
            'zoeker_naam' => "Abe Geeve",
            'dier' => 4,
            'dier_naam' => "avocado"
        ]);
    }
}
