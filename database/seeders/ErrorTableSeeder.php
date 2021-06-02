<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ErrorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('error')->insert([
            'error' => 'Je hebt hier al op gereageerd',
            'url' => '/dierenlijst'
        ]);

        DB::table('error')->insert([
            'error' => 'Je bent de eigenaar van dit huisdier',
            'url' => '/'
        ]);

        DB::table('error')->insert([
            'error' => 'Persoon die je wilt verbannen is al verbannen',
            'url' => '/admin'
        ]);

        DB::table('error')->insert([
            'error' => 'Persoon die je wilt bannen bestaat niet',
            'url' => '/admin'
        ]);

        DB::table('error')->insert([
            'error' => 'Afbeelding van de omgeving is te groot',
            'url' => '/imageUpload'
        ]);

        DB::table('error')->insert([
            'error' => 'Afbeelding van het dier is te groot',
            'url' => '/maakdier'
        ]);
    }
}
