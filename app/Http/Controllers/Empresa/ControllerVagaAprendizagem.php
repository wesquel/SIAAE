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


    private $inclusao;

    public function __construct()
    {
        auth()->setDefaultDriver('empresa');
    }

    public function create(Request $request){
        $this->inclusao = $request->query("inclusao");

        if ($this->inclusao == "nao"){
            $this->inclusao = false;
        }elseif ($this->inclusao == "sim"){
            $this->inclusao = true;
        }else{
            return redirect(route('cadastrar.vaga.empresa'));
        }

        return view('empresa.cadastrar_aprendizagem');
    }


    public function store(Request $request){
        $tipoVaga = "Aprendizagem";

        $validator = Validator::make($request->all(),[
            'titulo_vaga' => ['bail','required', 'string', 'min:5','max:100'],
            'bolsa' => ['bail', 'string', 'regex:/^\$?([0-9]{1,3}.([0-9]{3},)*[0-9]{2}|[0-9]+)(,[0-9][0-9])?$/', 'max:10'],
            'turno' => ['required', 'string', 'max:255'],
            'cursos' => ['required', 'string', 'max:255'],
            'auxilios' => ['string', 'max:255'],
            'ch_semanal' => ['required', 'string', 'regex:/^(((0[0-9])|(1[0-9])|(2[0-3])):[0-5][0-9])$/', 'max:99'],
            'ch_pratica' => ['required', 'string', 'regex:/^(((0[0-9])|(1[0-9])|(2[0-3])):[0-5][0-9])$/', 'max:99'],
            'ch_teorica' => ['required', 'string', 'regex:/^(((0[0-9])|(1[0-9])|(2[0-3])):[0-5][0-9])$/', 'max:99'],
            'data_inicio' => ['required', 'date', 'after_or_equal:' .  Date('Y-m-d')],
            'data_fim' => ['required', 'date', 'after_or_equal:' .  Date('Y-m-d')],
            'data_limite' => ['required','date','after_or_equal:' .  Date('Y-m-d')],
            'vagas' => ['required','integer', 'max:99'],
            'pre_requisitos' => ['required','string', 'max:255'],
            'atv_desempenhadas' => ['required','string', 'max:255'],
            'desc' => ['required','string', 'max:255'],
        ]);


        // /^(((0[0-9])|(1[0-9])|(2[0-3])):[0-5][0-9])$/ /regex de hora/tempo

        if ($validator->fails()) {
            return redirect()->refresh()
                ->withErrors($validator)
                ->withInput($request->input());
        }

        $vaga = Vaga::create([
            'titulo' => $request->titulo_vaga,
            'bolsa' => $request->bolsa,
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
            'status' => 'ativo', // ao criar a vaga ela sempre vai ter o status de Ativo.
            'modalidade' => 'presencial', // padrão do tipo de vaga (aprendeizagem sempre presencial)
            'inclusao' => $this->inclusao,
            'empresa_id' => Auth::user()->id,
        ]);

        event(new Registered($vaga));

        return redirect()->refresh();
    }

}
