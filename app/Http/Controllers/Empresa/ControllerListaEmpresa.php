<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerListaEmpresa extends Controller
{
    public function create(){
        return view('empresa.lista_vagas', ['userType' => 'empresa', 'vagas' => $this->getVagas()]);
    }

    public function getVagas(){
        return Vaga::where('empresa_id', '=', Auth::user()->id)->get();
    }

}
