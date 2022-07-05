<?php

use App\Http\Controllers\Auth\Empresa\loginEmpresaController;
use App\Http\Controllers\Auth\Empresa\registroEmpresaController;
use App\Http\Controllers\siaae\ControllerEmpresa;
use App\Http\Controllers\ControllerVagaEmpresa;
use Illuminate\Support\Facades\Route;

Route::get('/empresa/login', [loginEmpresaController::class, 'create']);
Route::post('/empresa/login', [loginEmpresaController::class, 'store'])->name('login.empresa');

Route::get('/empresa/registro',[registroEmpresaController::class,'create']);
Route::post('/empresa/registro',[registroEmpresaController::class,'store'])->name('registro.empresa');


Route::middleware('auth:empresa')->group(function () {
    Route::get('/empresa/logout', [loginEmpresaController::class, 'destroy'])
        ->name('empresa.logout');

    Route::get('/empresa/home', [ControllerEmpresa::class, 'home_empresa'])->name('home_empresa');
    Route::get('/empresa/cadastrar/vaga', [ControllerVagaEmpresa::class, 'create'])->name('cadastrar.vaga.empresa');
    Route::post('/empresa/cadastrar/vaga', [ControllerVagaEmpresa::class, 'store'])->name('cadastrar.vaga.empresa.post');

});
