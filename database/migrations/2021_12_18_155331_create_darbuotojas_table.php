<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarbuotojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darbuotojas', function (Blueprint $table) {
            $table->id('id');
            $table->string('asmens_kodas');
            $table->string('vardas');
            $table->string('pavarde');
            $table->string('slaptazodis');
            $table->string('el_pastas');
            $table->integer('darbo_etatas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darbuotojas');
    }
}
