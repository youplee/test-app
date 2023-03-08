<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('backdrop_path', 150)->nullable();
            $table->string('title', 150)->nullable();
            $table->string('original_language', 150)->nullable();
            $table->string('original_title', 150)->nullable();
            $table->text('overview')->nullable();
            $table->string('poster_path', 150)->nullable();
            $table->string('media_type', 150)->nullable();
            $table->float('popularity', 8, 3)->nullable();
            $table->date('release_date')->nullable();
            $table->float('vote_average', 8, 3)->nullable();
            $table->float('vote_count', 8, 3)->nullable();
            $table->boolean('video')->nullable();
            $table->boolean('adult')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
