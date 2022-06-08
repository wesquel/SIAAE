<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VagasAlunosEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas_alunos_empresa', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('empresa_id')->constrained()->onDelete('cascade');
            $table->foreignId('aluno_id')->constrained()->onDelete('cascade');
            $table->boolean('status_aluno');
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
        //
    }
}
