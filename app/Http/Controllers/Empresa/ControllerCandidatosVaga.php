<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\VagasAlunosEmpresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerCandidatosVaga extends Controller
{

    protected $vaga_id;

    public function create($id){
        $candidatos_id = $this->getCandidatos($id);
        $candidatos = $this->getAlunoCandidatos($candidatos_id);

        return view('empresa.vaga', ['candidatos' => $candidatos]);
    }

    public function getCandidatos($id){
        return VagasAlunosEmpresa::where('vaga_id', '=', $id)->get();
    }

    public function getAlunoCandidatos($candidatos){
        $array = [];

        foreach ($candidatos as $candidato_id){
            $array[] = Aluno::where('id', '=', $candidato_id->aluno_id)->get();
        }

        return $array;

    }

}
