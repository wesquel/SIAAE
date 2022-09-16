<?php

use App\Http\Controllers\Aluno\candidaturasController;
use App\Http\Controllers\Aluno\vagasController;
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
    Route::get('/aluno/logout', [loginAlunoController::class, 'destroy'])->name('aluno.logout');
    Route::get('/aluno/home', [homeController::class, 'create'])->name('home.aluno');

    Route::get('/aluno/configuracoes', [configController::class, 'create'])->name('config.aluno');
    Route::put('/aluno/configuracoes', [configController::class, 'update'])->name('config.form.aluno');
    Route::post('/aluno/configuracoes', [configController::class, 'createContatos'])->name('config.form.aluno.contato');

    Route::get('/aluno/candidaturas', [candidaturasController::class, 'create'])->name('candidaturas');
    Route::get('/aluno/vagas', [vagasController::class, 'create'])->name('lista-vagas');
    Route::get('/aluno/vaga_estagio', [vagasController::class, 'createEstagio']);
    Route::get('/aluno/vaga_aprendizagem', [vagasController::class, 'createAprendizagem']);
    Route::get('/confirma_candidatura_estagio', [ControllerAluno::class, 'confirma_candidatura_estagio']);
    Route::get('/confirma_candidatura_aprendizagem', [ControllerAluno::class, 'confirma_candidatura_aprendizagem']);
});
