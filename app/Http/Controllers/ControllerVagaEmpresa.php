<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerVagaEmpresa extends Controller
{
    public function cadastrarvaga(){
        return view('empresa.cadastrar_vaga');
    }

    public function cadastrarestagio(){
        return view('empresa.cadastrar_estagio');
    }

    public function cadastraraprendizagem(){
        return view('empresa.cadastrar_aprendizagem');
    }
}
