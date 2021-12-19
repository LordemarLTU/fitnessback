<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaudotojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naudotojas', function (Blueprint $table) {
            $table->id('kliento_nr');
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('el_pastas');
            $table->string('slaptazodis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naudotojas');
    }
}
