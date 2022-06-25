<?php

namespace App\Http\Controllers\Auth\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\Endereco;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registroEmpresaController extends Controller
{
    public function create()
    {
        return view('empresa.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_empresa' => ['bail','required', 'string', 'max:255', 'unique:empresas'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:empresas'],
            'password' => ['required', 'confirmed', 'min:8'],
            'cep' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'max:255'],
        ]);

        $empresa = Empresa::create([
            'nome_empresa' => $request->nome_empresa,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $endereco = Endereco::create([
            'empresa_id' => $empresa->id,
            'cep' => $request->cep,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
        ]);


        event(new Registered($empresa));
        event(new Registered($endereco));

        Auth::login($empresa);

        return redirect('/registro-empresa')->with('success', "Registrado com Sucesso");
    }
}
