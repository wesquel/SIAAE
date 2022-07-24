<?php

use App\Http\Controllers\Auth\Empresa\loginEmpresaController;
use App\Http\Controllers\Auth\Empresa\registroEmpresaController;
use App\Http\Controllers\Empresa\ControllerCandidatosVaga;
use App\Http\Controllers\Empresa\ControllerConfigEmpresa;
use App\Http\Controllers\Empresa\ControllerHomeEmpresa;
use App\Http\Controllers\Empresa\ControllerListaEmpresa;
use App\Http\Controllers\empresa\ControllerVagaAprendizagem;
use App\Http\Controllers\Empresa\ControllerVagaEmpresa;
use App\Http\Controllers\siaae\ControllerEmpresa;
use App\Http\Controllers\Empresa\ControllerVagaEstagio;

use Illuminate\Support\Facades\Route;

Route::get('/empresa/login', [loginEmpresaController::class, 'create']);
Route::post('/empresa/login', [loginEmpresaController::class, 'store'])->name('login.empresa');

Route::get('/empresa/registro',[registroEmpresaController::class,'create']);
Route::post('/empresa/registro',[registroEmpresaController::class,'store'])->name('registro.empresa');


Route::middleware('auth:empresa')->group(function () {
    Route::get('/empresa/logout', [loginEmpresaController::class, 'destroy'])->name('empresa.logout');

    Route::get('/empresa/home', [ControllerHomeEmpresa::class, 'create'])->name('home_empresa');

    Route::get('empresa/lista/vagas', [ControllerListaEmpresa::class, 'create'])->name('empresa.lista.vagas');

    Route::get('/empresa/cadastrar/vaga', [ControllerVagaEmpresa::class, 'create'])->name('cadastrar.vaga.empresa');
    Route::post('/empresa/cadastrar/vaga', [ControllerVagaEmpresa::class, 'store'])->name('cadastrar.vaga.empresa.post');

    Route::get('/empresa/configuracoes', [ControllerConfigEmpresa::class, 'create'])->name('configuracoes.empresa');
    Route::put('/empresa/configuracoes', [ControllerConfigEmpresa::class, 'update'])->name('configuracoes.empresa.put');
//    Route::post('/empresa/configuracoes', [ControllerConfigEmpresa::class, 'store'])->name('configuracoes.empresa.post');

    Route::get('empresa/cadastrar/vaga/aprendizagem', [ControllerVagaAprendizagem::class, 'create'])
        ->name('cadastrar.vaga.aprendizagem');
    Route::post('empresa/cadastrar/vaga/aprendizagem', [ControllerVagaAprendizagem::class, 'store'])
        ->name('cadastrar.vaga.aprendizagem');

    Route::get('empresa/cadastrar/vaga/estagio', [ControllerVagaEstagio::class, 'create'])
        ->name('cadastrar.vaga.estagio');
    Route::post('empresa/cadastrar/vaga/estagio', [ControllerVagaEstagio::class, 'store'])
        ->name('cadastrar.vaga.estagio');

//    Route::get('empresa/cadastrar/vaga/{id}', [ControllerCandidatosVaga::class, 'create'])
//        ->name('candidatos.vaga');

    Route::get('empresa/lista/vagas/{id}', function ($id){
        $controller = new ControllerCandidatosVaga();
        return $controller->create($id);
    })->whereNumber('id');

});
