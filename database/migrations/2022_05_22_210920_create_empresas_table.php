<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {

            $table->id();//alterar
            $table->string('CPF_CNPJ')->unique();
            $table->string('nome_empresa');
            $table->string('nome_responsavel')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefone')->nullable(); //alterar
            $table->string('image')->nullable(); //alterar
            $table->boolean('termos')->nullable(); //alterar
            $table->rememberToken();
            $table->date('DATE_FIRST_ACCESS')->nullable(); //alterar
            $table->timestamp('email_verified_at')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
