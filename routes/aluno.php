<?php

use App\Http\Controllers\Auth\Aluno\loginAlunoController;
use App\Http\Controllers\Auth\Aluno\registroAlunoController;
use App\Http\Controllers\siaae\ControllerAluno;
use \App\Http\Controllers\Aluno\homeController;
use \App\Http\Controllers\Aluno\configController;
use Illuminate\Support\Facades\Route;

Route::get('/aluno/login', [loginAlunoController::class, 'create']);
Route::post('/aluno/login', [loginAlunoController::class, 'store'])->name('login.aluno');

Route::get('/aluno/registro', [registroAlunoController::class, 'create']);
Route::post('/aluno/registro', [registroAlunoController::class, 'store'])->name('registro.aluno');

Route::group(['middleware' => 'auth:aluno'], function(){
    Route::get('/aluno/logout', [loginAlunoController::class, 'destroy'])
        ->name('logout');

    Route::get('/aluno/home', [homeController::class, 'create'])->name('home.aluno');

    Route::get('/configuracoes', [configController::class, 'create'])->name('config.aluno');
    Route::post('/configuracoes', [configController::class, 'store'])->name('config.form.aluno');

    Route::get('/candidaturas', [ControllerAluno::class, 'candidaturas'])->name('candidaturas');
    Route::get('/vagas', [ControllerAluno::class, 'vagas'])->name('lista-vagas');
    Route::get('/vaga_estagio', [ControllerAluno::class, 'vaga_estagio']);
    Route::get('/vaga_aprendizagem', [ControllerAluno::class, 'vaga_aprendizagem']);
    Route::get('/confirma_candidatura_estagio', [ControllerAluno::class, 'confirma_candidatura_estagio']);
    Route::get('/confirma_candidatura_aprendizagem', [ControllerAluno::class, 'confirma_candidatura_aprendizagem']);
});
