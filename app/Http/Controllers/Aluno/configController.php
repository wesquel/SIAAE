<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Outros_contatos;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class configController extends Controller
{
    public function create(){

        return view('aluno.configuracoes');
    }

    public function update(Request $request)
    {
        $validator = $request->validate([
            'email' => ['string', 'email', 'max:255','nullable'],
            'telefone' => ['string', 'max:255','nullable'],
            'linkedin' => ['string', 'min:8','nullable'],
            'lattes' => ['string', 'max:255','nullable'],
            'github' => ['string', 'max:255','nullable'],
            'desc' => ['string', 'max:255','nullable'],
        ]);

        $user = Aluno::findOrFail(Auth::user()->id);
        $user->telefone = $request->telefone;
        $user->email = $request->email;
        $user->linkedin = $request->linkedin;
        $user->lattes = $request->lattes;
        $user->github = $request->github;
        $user->desc = $request->desc;
        $user->update();

        return redirect('/aluno/configuracoes')->withErrors($validator, 'erros');
    }

    public function createContatos(Request $request){
        $request->validate([
            'tipo' => ['bail','required', 'string', 'max:255'],
            'titulo' => ['bail','required', 'string', 'max:255'],
            'link' => ['bail','required', 'string', 'max:255'],
        ]);


        $contato = Outros_contatos::create([
            'tipo' => $request->tipo,
            'titulo' => $request->titulo,
            'link' => $request->link,
            'aluno_id' => Auth::user()->id,
        ]);

        event(new Registered($contato));

        return redirect('/aluno/configuracoes')->with('success', "Registrado com Sucesso");

    }

}
