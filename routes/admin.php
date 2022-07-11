<?php

use App\Http\Controllers\Empresa\ControllerVagaAprendizagem;
use App\Http\Controllers\siaae\ControllerEmpresa;
use Illuminate\Support\Facades\Route;

/*
COPIADO DO EMPRESA.PHP

Route::get('/empresa/login', [loginEmpresaController::class, 'create']);
Route::post('/empresa/login', [loginEmpresaController::class, 'store'])->name('login.empresa');

Route::get('/empresa/registro',[registroEmpresaController::class,'create']);
Route::post('/empresa/registro',[registroEmpresaController::class,'store'])->name('registro.empresa');


Route::middleware('auth:empresa')->group(function () {
    Route::get('/empresa/logout', [loginEmpresaController::class, 'destroy'])
        ->name('empresa.logout');
});
*/

Route::get('/admin/home', [ControllerEmpresa::class, 'home_empresa'])->name('home_empresa');
Route::get('/admin/cadastrar/vaga', [ControllerVagaAprendizagem::class, 'cadastrarvaga'])->name('cadastrar.vaga.empresa');
Route::get('/admin/cadastrar/vaga/estagio', [ControllerVagaAprendizagem::class, 'cadastrarestagio'])->name('cadastrar.vaga.empresa');
Route::get('/admin/cadastrar/vaga/aprendizagem', [ControllerVagaAprendizagem::class, 'cadastraraprendizagem'])->name('cadastrar.vaga.empresa');
