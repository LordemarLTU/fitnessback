<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreniruotesPriminimasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treniruotes_priminimas', function (Blueprint $table) {
            $table->id('priminimo_nr');
            $table->string('priminimo_tekstas');
            $table->string('kliento_pastas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treniruotes_priminimas');
    }
}
