<?php

use App\Http\Controllers\registroDeDadosDefault\registroDeCampi;
use App\Http\Controllers\registroDeDadosDefault\registroDeCursos;
use App\Http\Controllers\siaae\ControllerAluno;
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
Route::get('/', function () {return view('index'); })->name('index');
Route::get('/aluno/teste', [ControllerAluno::class, 'termos_uso']);
Route::get('/error', function () {return view('errors.404'); });

// teste
Route::get('/registrarCampi', [registroDeCampi::class, 'create']);
Route::get('/registrarCursos', [registroDeCursos::class, 'create']);

require __DIR__.'/auth.php';
require __DIR__.'/empresa.php';
require __DIR__.'/aluno.php';
