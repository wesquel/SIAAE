<?php

namespace App\Http\Controllers\siaae;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerAluno extends Controller
{
    public function login_aluno(){
        return view('siaae.fluxo_aluno.login_aluno.login_aluno');
    }

    public function termos_uso(){
        return view('siaae.fluxo_aluno.termos_uso.termos_uso');
    }

    public function home_aluno(){
        return view('siaae.fluxo_aluno.home_aluno.home_aluno');
    }

    public function configuracoes(){
        return view('siaae.fluxo_aluno.configuracoes.configuracoes');
    }

    public function candidaturas(){
        return view('siaae.fluxo_aluno.candidaturas.candidaturas');
    }
}
