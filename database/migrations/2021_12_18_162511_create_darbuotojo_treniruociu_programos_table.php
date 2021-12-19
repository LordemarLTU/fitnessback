<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarbuotojoTreniruociuProgramosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darbuotojo_treniruociu_programos', function (Blueprint $table) {
            $table->id('fk_Treniruotes_programatreniruotes_nr');/*
            $table->id('fk_Treniruotes_programadarbuotojo_nr');
            $table->id('fk_Darbuotojasdarbuotojo_nr');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darbuotojo_treniruociu_programos');
    }
}
