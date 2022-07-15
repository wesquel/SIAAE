<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Endereco;
use App\Models\Vaga;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use const App\Http\Controllers\redirect;

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
            return redirect(route('cadastrar.vaga.aprendizagem', ['inclusao' => $inclusaoVaga]));
        }elseif ($tipoVaga == 'estagio'){
            return redirect(route('cadastrar.vaga.estagio', ['inclusao' => $inclusaoVaga]));
        }else{
            return redirect('/empresa/cadastrar/vaga');
        }
    }

    public function cadastroVagaEstagio(Request $request){
        $titulo = $request->radio_tipo;
    }


    public function getEndereco(){
        return Endereco::where('empresa_id', '=', Auth::user()->id)->get();
    }

}
