<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDierenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieren', function (Blueprint $table) {
            $table->id('number');
            $table->foreignid('eigenaar');
            $table->foreign('eigenaar')->references('id')->on('users');
            $table->string('plaats');
            $table->string('name');
            $table->string('soort');
            $table->foreign('soort')->references('soort')->on('soorten');
            $table->date('start');
            $table->date('end');
            $table->integer('costs');
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->string('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dieren', function (Blueprint $table){
            $table->dropForeign('dieren_eigenaar_foreign');
            $table->dropForeign('dieren_soort_foreign');
        });
        Schema::dropIfExists('dieren');
    }
}
