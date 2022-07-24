<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Vaga;
use App\Models\VagasAlunosEmpresa;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class vagasController extends Controller
{
    public function create(){
        $vagas = $this->getVagas();
        return view('aluno.vagas', ['vagas' => $vagas]);
    }

    public function getVagas(){
        $vagas_id = VagasAlunosEmpresa::where('aluno_id', '=', Auth::user()->id)->get();
        $vagas = [];
        foreach ($vagas_id as $vaga){
            $vagas[] = [Vaga::where('id', '=', $vaga['vaga_id'])->get(), $vaga['status_aluno']];
        }
        return $vagas;
    }

    public function createEstagio(){
        return view('aluno.vaga_aprendizagem');
    }

    public function createAprendizagem(){
        return view('aluno.vaga_estagio');
    }

}
