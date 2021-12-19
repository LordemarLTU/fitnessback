<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistracijaITreniruoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registracija_i_treniruote', function (Blueprint $table) {
            $table->id('registracijos_nr');
            $table->string('vardas');
            $table->string('pavarde');
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
        Schema::dropIfExists('registracija_i_treniruote');
    }
}
