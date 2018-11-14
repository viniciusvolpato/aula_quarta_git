<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoHabitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_habitos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('historico_id')->unsigned();
            $table->foreign('historico_id')->references('id')->on('historicos');
            $table->integer('habito_id')->unsigned();
            $table->foreign('habito_id')->references('id')->on('habitos');
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
        Schema::dropIfExists('historico_habitos');
    }
}
