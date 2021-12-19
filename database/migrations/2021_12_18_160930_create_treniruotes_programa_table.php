<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreniruotesProgramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treniruotes_programa', function (Blueprint $table) {
            $table->id('treniruotes_nr');
            $table->string('darbuotojo_vardas');
            $table->string('pavadinimas');
            $table->integer('dalyviu_sakicius');
            $table->integer('trukme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treniruotes_programa');
    }
}
