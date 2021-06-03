<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DierenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dieren')->insert([
            'eigenaar' => 2,
            'plaats' => "Urk",
            'name' => "Bibi",
            'soort' => "Kat",
            'start' => "2021-06-08",
            'end' => "2021-06-10",
            'costs' => "2",
            'comment' => "Hij kotst veel",
            'image' => "bibi.jpg"
        ]);

        DB::table('dieren')->insert([
            'eigenaar' => 3,
            'plaats' => "Toolenburg",
            'name' => "bobby",
            'soort' => "Hond",
            'start' => "2021-06-010",
            'end' => "2021-06-20",
            'costs' => "6",
            'comment' => "Blind en Doof",
            'image' => "bobby.png"
        ]);

        DB::table('dieren')->insert([
            'eigenaar' => 3,
            'plaats' => "toolenburg",
            'name' => "Mudkip",
            'soort' => "Anders",
            'start' => "2021-06-10",
            'end' => "2021-06-20",
            'costs' => "3",
            'image' => "axelotl.jpg"
        ]);

        DB::table('dieren')->insert([
            'eigenaar' => 1,
            'plaats' => "Hoofddorp",
            'name' => "Avocado",
            'soort' => "Vogel",
            'start' => "2021-08-02",
            'end' => "2021-08-23",
            'costs' => "3",
            'image' => "Avocado.png"
        ]);
    }
}
