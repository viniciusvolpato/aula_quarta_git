<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 20);
            $table->string('descricao', 50);
            $table->string('tp_habito', 10);
            $table->date('dt_inicio_ctrl');
            $table->integer('objetivo');
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
        Schema::dropIfExists('habitos');
    }
}
