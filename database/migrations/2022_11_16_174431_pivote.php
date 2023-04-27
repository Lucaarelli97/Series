<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pivote extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivote', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelicula');
            $table->integer('id_serie');
            $table->integer('id_documental');
 
            $table->foreign('id_pelicula')->references('id')->on('films');
            $table->foreign('id_serie')->references('id')->on('seriesnets');
            $table->foreign('id_documental')->references('id')->on('docus');

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
        //
    }
}
