<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZinutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zinutes', function (Blueprint $table) {
            $table->id('zinutes_nr');
            $table->string('tekstas');
            $table->string('tema');
            $table->string('gavejo_vardas');
            $table->string('gavejo_pavarde');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zinutes');
    }
}
