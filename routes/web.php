<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\Empresa\loginEmpresaController;
use App\Http\Controllers\Auth\Empresa\registroEmpresaController;
use App\Http\Controllers\siaae\ControllerAluno;
use App\Http\Controllers\siaae\ControllerEmpresa;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/termos_uso', [ControllerAluno::class, 'termos_uso']);
Route::get('/', function () {return view('index');})->name('index');


//Route::group(['middleware' => 'auth'], function(){
    Route::get('/home_aluno', [ControllerAluno::class, 'home_aluno'])->name('home-aluno');
    Route::get('/configuracoes', [ControllerAluno::class, 'configuracoes'])->name('configuracoes');
    Route::get('/candidaturas', [ControllerAluno::class, 'candidaturas'])->name('candidaturas');
    Route::get('/vagas', [ControllerAluno::class, 'vagas'])->name('lista-vagas');
    Route::get('/vaga_estagio', [ControllerAluno::class, 'vaga_estagio']);
    Route::get('/vaga_aprendizagem', [ControllerAluno::class, 'vaga_aprendizagem']);
    Route::get('/confirma_candidatura_estagio', [ControllerAluno::class, 'confirma_candidatura_estagio']);
    Route::get('/confirma_candidatura_aprendizagem', [ControllerAluno::class, 'confirma_candidatura_aprendizagem']);
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/empresa.php';
