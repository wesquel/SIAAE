<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id('matricula');
            $table->boolean('ADMIN');
            $table->string('curriculo');
            $table->integer('telefone');
            $table->string('email');
            $table->string('linkedin');
            $table->string('lattes');
            $table->string('github');
            $table->text('desc');
            $table->date('DATE_FIRST_ACCESS');
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
        Schema::dropIfExists('alunos');
    }
}
