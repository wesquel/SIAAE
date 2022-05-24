<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('tipo');
            $table->integer('ch_semanal');
            $table->string('turno');
            $table->date('data_publicação');
            $table->string('auxilios');
            $table->string('cursos');
            $table->string('status');
            $table->string('modalidade');
            $table->string('inclusao');
            $table->date('data_fim');
            $table->date('data_limite');
            $table->boolean('isBolsa');
            $table->double('valor_bolsa');
            $table->string('atv-ferias');
            $table->integer('ch_teorica');
            $table->integer('ch_pratica');
            $table->text('desc');
            $table->text('atv_desempenhadas');
            $table->text('pre_requisitos');
            $table->integer('vagas');
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
        Schema::dropIfExists('vagas');
    }
}
