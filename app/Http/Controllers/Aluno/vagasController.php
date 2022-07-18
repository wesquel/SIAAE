<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vagasController extends Controller
{
    public function create(){

        return view('aluno.vagas');
    }

    public function createEstagio(){
        return view('aluno.vaga_aprendizagem');
    }

    public function createAprendizagem(){
        return view('aluno.vaga_estagio');
    }

}
