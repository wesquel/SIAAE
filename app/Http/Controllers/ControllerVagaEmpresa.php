<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerVagaEmpresa extends Controller
{

    public function __construct()
    {
        auth()->setDefaultDriver('empresa');
    }

    public function create(){
        return view('empresa.cadastrar_vaga', ['endereco' => $this->getEndereco()]);
    }

    public function store(Request $request){
        $tipoVaga = $request->radio_tipo;
        $inclusaoVaga = $request->radio_inclusao;

        if ($tipoVaga == 'aprendizagem'){
            return view('empresa.cadastrar_aprendizagem', ['inclusao' => $inclusaoVaga]);
        }elseif ($tipoVaga == 'estagio'){
            return view('empresa.cadastrar_estagio',['inclusao' => $inclusaoVaga]);
        }else{
            return redirect->back('/empresa/cadastrar/vaga');
        }
    }


    public function getEndereco(){
        return Endereco::where('empresa_id', '=', Auth::user()->id)->get();
    }

}
