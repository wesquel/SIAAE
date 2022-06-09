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

//Rota OnePage
Route::get('/', 'teste@index');
//Rotas Empresa


//Rotas do fluxo do aluno
Route::get('/login_empresa', [ControllerEmpresa::class, 'login_empresa'])->name('login_empresa');

Route::get('/home_empresa', [ControllerEmpresa::class, 'home_empresa'])->name('home_empresa');

Route::get('/login_aluno', [ControllerAluno::class, 'login_aluno']);
Route::post('/auth',[ControllerAluno::class, 'auth'])->name('auth.user');

Route::get('/termos_uso', [ControllerAluno::class, 'termos_uso']);

Route::get('/home_aluno', [ControllerAluno::class, 'home_aluno'])->name('home-aluno');

Route::get('/configuracoes', [ControllerAluno::class, 'configuracoes'])->name('configuracoes');

Route::get('/candidaturas', [ControllerAluno::class, 'candidaturas'])->name('candidaturas');

Route::get('/vagas', [ControllerAluno::class, 'vagas'])->name('lista-vagas');

Route::get('/vaga_estagio', [ControllerAluno::class, 'vaga_estagio']);

Route::get('/vaga_aprendizagem', [ControllerAluno::class, 'vaga_aprendizagem']);

Route::get('/confirma_candidatura_estagio', [ControllerAluno::class, 'confirma_candidatura_estagio']);

Route::get('/confirma_candidatura_aprendizagem', [ControllerAluno::class, 'confirma_candidatura_aprendizagem']);

//Rotas ADMIN
