<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReactiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reacties', function (Blueprint $table) {
            $table->id('verzoek_id');
            $table->foreignId('eigenaar_id');
            $table->foreignId('zoeker_id');
            $table->string('zoeker_naam');
            $table->foreignId("dier_id");
            $table->string('dier_naam');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reacties');
    }
}
