<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const App\Http\Controllers\redirect;

class ControllerConfigEmpresa extends Controller
{
    public function create(){
        return view('empresa.configuracoes', ['endereco' => $this->getEndereco(), 'userType' => 'empresa']);
    }

    public function getEndereco(){
        return Endereco::where('empresa_id', '=', Auth::user()->id)->get();
    }
}
