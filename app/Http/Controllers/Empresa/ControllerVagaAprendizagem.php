<?php

namespace App\Http\Controllers\empresa;

use App\Http\Controllers\Controller;
use App\Models\Vaga;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ControllerVagaAprendizagem extends Controller
{

    public function __construct()
    {
        auth()->setDefaultDriver('empresa');
    }

    public function create(){
        return view('empresa.cadastrar_aprendizagem');
    }


    public function store(Request $request){
        $tipoVaga = "aprendizagem";

        $validator = Validator::make($request->all(),[
            'titulo_vaga' => ['bail','required', 'string', 'min:5','max:255'],
//            'bolsa' => ['bail','required', 'string', 'max:255'],
            'ch_semanal' => ['bail','required', 'string', 'max:255'],
            'turno' => ['required', 'string', 'max:255'],
            'cursos' => ['required', 'string', 'max:255'],
            'ch_pratica' => ['required', 'string', 'max:255'],
            'ch_teorica' => ['required', 'string', 'max:255'],
            'data_inicio' => ['required', 'date', 'max:255'],
            'data_fim' => ['required','date', 'max:255'],
            'data_limite' => ['required','date','date_format:d.m.Y', 'max:255'],
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
            'titulo' => $request->titulo_vaga,
            //      'bolsa' => $request->bolsa,
            'tipo' => $tipoVaga,
            'auxilios' => $request->auxilios,
            'ch_semanal'=> $request->ch_semanal,
            'turno' => $request->turno,
            'cursos' => $request->cursos,
            'ch_pratica' => $request->ch_pratica,
            'ch_teorica' => $request->ch_teorica,
            'data_inicio' => $request->data_inicio,
            'data_fim' => $request->data_fim,
            'data_limite' => $request->data_limite,
            'vagas' => $request->vagas,
            'pre_requisitos' => $request->pre_requisitos,
//            'atv_ferias' => 'teste',//alterar (adicionar ao lado)
            'atv_desempenhadas' => $request->atv_desempenhadas,
            'desc' => $request->desc,
            'status' => 'ativo',
            'modalidade' => 'presencial',
            'inclusao' => false,
            'empresa_id' => Auth::user()->id,
        ]);

        event(new Registered($vaga));

        return redirect()->refresh();
    }

}
