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

    public function vagas(){
        return view('siaae.fluxo_aluno.vagas.vagas');
    }

    public function vaga_estagio(){
        return view('siaae.fluxo_aluno.vaga_estagio.vaga_estagio');
    }

    public function vaga_aprendizagem(){
        return view('siaae.fluxo_aluno.vaga_aprendizagem.vaga_aprendizagem');
    }

    public function confirma_candidatura_estagio(){
        return view('siaae.fluxo_aluno.confirma_candidatura_estagio.confirma_candidatura_estagio');
    }

    public function confirma_candidatura_aprendizagem(){
        return view('siaae.fluxo_aluno.confirma_candidatura_aprendizagem.confirma_candidatura_aprendizagem');
    }
}
