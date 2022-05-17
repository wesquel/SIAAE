<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Controllers\siaae\ControllerAluno;

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

//Rota página principal (Sobre)
Route::get('/sobre', function(){ 
  return view('sobre');
});

//Rotas do fluxo do aluno
Route::get('/login_aluno', [ControllerAluno::class, 'login_aluno']);

Route::get('/termos_uso', [ControllerAluno::class, 'termos_uso']);

Route::get('/home_aluno', [ControllerAluno::class, 'home_aluno']);

Route::get('/configuracoes', [ControllerAluno::class, 'configuracoes']);

Route::get('/candidaturas', [ControllerAluno::class, 'candidaturas']);