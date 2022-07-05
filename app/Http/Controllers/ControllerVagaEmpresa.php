<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ControllerVagaEmpresa extends Controller
{
    public function create(){
        return view('empresa.cadastrar_vaga');
    }

    public function store(Request $request){
        $tipoVaga = $request->radio_tipo;
        $inclusaoVaga = $request->radio_inclusao;

        if ($tipoVaga == 'aprendizagem'){
            return view('empresa.cadastrar_aprendizagem', ['inclusao' => $inclusaoVaga]);
        }elseif ($tipoVaga == 'estagio'){
            return view('empresa.cadastrar_estagio', ['inclusao' => $inclusaoVaga]);
        }else{
            return redirect->back('/empresa/cadastrar/vaga');
        }
    }

}
