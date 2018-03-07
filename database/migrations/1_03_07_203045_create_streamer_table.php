<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreamerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streamer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 200);
            $table->string('synopsis', 1000);
            $table->date('sortie');
            $table->integer('genre');
            $table->integer('type');
            $table->time('duree');
            $table->float('ratio');
            $table->foreign('genre')->references('id')->on('streamer_genre');
            $table->foreign('type')->references('id')->on('streamer_type');
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
        Schema::dropIfExists('streamer');
    }
}
