<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ControllerVagaEstagio extends Controller
{

    public function __construct()
    {
        auth()->setDefaultDriver('empresa');
    }

    public function create(){
        return view('empresa.cadastrar_estagio');
    }

    public function store(Request $request){
        $tipoVaga = "Estagio";



        $validator = Validator::make($request->all(),[
            'titulo_vaga' => ['bail','required', 'string', 'max:255'],
//            'bolsa' => ['bail','required', 'string', 'max:255'],
            'ch_semanal' => ['bail','required', 'string', 'max:255'],
            'turno' => ['required', 'string', 'max:255'],
            'auxilios' => ['required', 'string', 'max:255'],
            'cursos' => ['required', 'string', 'max:255'],
            'modalidade' => ['required', 'string', 'max:255'],
            'data_inicio' => ['required', 'date', 'max:255'],
            'data_fim' => ['required','date', 'max:255'],
            'data_limite' => ['required','date', 'max:255'],
            'vagas' => ['required','string', 'max:255'],
            'pre_requisitos' => ['required','string', 'max:255'],
            'atv_desempenhadas' => ['required','string', 'max:255'],
            'desc' => ['required','string', 'max:255'],
        ]);

        if ($validator->fails()) {
            return redirect()->refresh()
                ->withErrors($validator)
                ->withInput($request->input());
        }

        $vaga = Vaga::create([
            'tipo' => $tipoVaga,
            'titulo' => $request->titulo_vaga,
            //      'bolsa' => $request->bolsa,
            'ch_semanal'=> $request->ch_semanal,
            'auxilios' => $request->auxilios,
            'turno' => $request->turno,
            'cursos' => $request->cursos,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'data_limite' => $request->data_limite,
            'vagas' => $request->vagas,
            'pre_requisitos' => $request->pre_requisitos,
//            'atv_ferias' => $request->atv_ferias,
            'atv_desempenhadas' => $request->atv_desempenhadas,
            'desc' => $request->desc,
            'status' => 'ativo', //preciso inserir
            'modalidade' => 'presencial', //preciso inserir
            'inclusao' => false, //preciso inserir
            'empresa_id' => Auth::user()->id,
        ]);

        event(new Registered($vaga));

        return redirect()->refresh();
    }
}
