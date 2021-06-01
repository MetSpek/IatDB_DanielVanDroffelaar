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
            $table->id();
            $table->foreignid('eigenaar');
            $table->foreign('eigenaar')->references('id')->on('users');
            $table->string('name');
            $table->string('kind');
            $table->date('start');
            $table->date('end');
            $table->integer('costs');
            $table->time('from')->nullable();
            $table->time('to')->nullable();
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
        });
        Schema::dropIfExists('dieren');
    }
}
