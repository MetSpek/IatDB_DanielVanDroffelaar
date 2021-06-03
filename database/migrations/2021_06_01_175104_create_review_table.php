<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reviewed');
            $table->foreign('reviewed')->references('id')->on('users');
            $table->string('reviewer');
            $table->foreign('reviewer')->references('name')->on('users');
            $table->integer('score');
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review', function (Blueprint $table){
            $table->dropForeign('review_reviewed_foreign');
            $table->dropForeign('review_reviewer_foreign');
        });

        Schema::dropIfExists('review');
    }
}
