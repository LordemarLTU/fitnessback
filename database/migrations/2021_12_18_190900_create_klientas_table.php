<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlientasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klientas', function (Blueprint $table) {
            $table->id('kliento_nr');
            $table->integer('zip_kodas');
            $table->string('uzsiregistruotos_treniruotes');
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('slaptazodis');
            $table->string('el_pastas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klientas');
    }
}
