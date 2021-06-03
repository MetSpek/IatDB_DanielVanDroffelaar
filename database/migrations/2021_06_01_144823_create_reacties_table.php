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
            $table->foreignId('eigenaar');
            $table->foreign('eigenaar')->references('eigenaar')->on('dieren')->onDelete('cascade');;
            $table->foreignId('zoeker');
            $table->foreign('zoeker')->references('id')->on('users')->onDelete('cascade');;
            $table->string('zoeker_naam');
            $table->foreignId("dier");
            $table->foreign('dier')->references('number')->on('dieren')->onDelete('cascade');;
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
        Schema::table('reacties', function (Blueprint $table){
            $table->dropForeign('reacties_eigenaar_foreign');
            $table->dropForeign('reacties_zoeker_foreign');
            $table->dropForeign('reacties_dier_foreign');
        });

        Schema::dropIfExists('reacties');
    }
}
