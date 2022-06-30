<?php

namespace App\Http\Controllers\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class configController extends Controller
{
    public function create(){

        return view('aluno.configuracoes');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => ['string', 'required', 'email', 'max:255', 'unique:empresas'],
            'telefone' => ['required', 'string', 'max:255', 'unique:empresas'],
            'linkedin' => ['string', 'min:8'],
            'lattes' => ['string', 'max:255'],
            'github' => ['string', 'max:255'],
            'desc' => ['string', 'max:255'],
        ]);

        Auth::user()->email = $request->email;
        Auth::user()->telefone = $request->telefone;
        Auth::user()->linkedin = $request->linkedin;
        Auth::user()->lattes = $request->lattes;
        Auth::user()->github = $request->github;
        Auth::user()->desc = $request->desc;

        return redirect('/configuracoes')->with('success', "Registrado com Sucesso!");
    }

}
