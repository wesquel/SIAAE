<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerListaEmpresa extends Controller
{
    public function create(){
        return view('empresa.lista_vagas', ['userType' => 'empresa']);
    }
}
