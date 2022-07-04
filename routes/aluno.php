<?php

use App\Http\Controllers\Auth\Empresa\loginEmpresaController;
use App\Http\Controllers\Auth\Empresa\registroEmpresaController;
use App\Http\Controllers\siaae\ControllerAluno;
use App\Http\Controllers\siaae\ControllerEmpresa;
use Illuminate\Support\Facades\Route;

Route::get('/login-aluno', [loginEmpresaController::class, 'create']);
Route::post('/login-aluno', [loginEmpresaController::class, 'store'])->name('login.aluno');

Route::get('/registro-aluno',[registroEmpresaController::class,'create']);
Route::post('/registro-aluno',[registroEmpresaController::class,'store'])->name('registro.aluno');



Route::get('/home/aluno', [ControllerAluno::class, 'home_aluno'])->name('home.aluno');
Route::get('logout-aluno', [loginEmpresaController::class, 'destroy'])
    ->name('logout');
Route::get('/configuracoes', [ControllerAluno::class, 'configuracoes'])->name('configuracoes');
Route::get('/candidaturas', [ControllerAluno::class, 'candidaturas'])->name('candidaturas');
Route::get('/vagas', [ControllerAluno::class, 'vagas'])->name('lista-vagas');
Route::get('/vaga_estagio', [ControllerAluno::class, 'vaga_estagio']);
Route::get('/vaga_aprendizagem', [ControllerAluno::class, 'vaga_aprendizagem']);
Route::get('/confirma_candidatura_estagio', [ControllerAluno::class, 'confirma_candidatura_estagio']);
Route::get('/confirma_candidatura_aprendizagem', [ControllerAluno::class, 'confirma_candidatura_aprendizagem']);
