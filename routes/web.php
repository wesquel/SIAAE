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
Route::get('/', function () {return view('index'); });



require __DIR__.'/auth.php';
require __DIR__.'/empresa.php';
require __DIR__.'/aluno.php';
