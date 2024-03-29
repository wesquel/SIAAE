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
        if (Auth::user() != null){
            return redirect()->intended('/empresa/home');
        }
        return view('empresa.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CPF_CNPJ' => ['bail','required', 'cpf_ou_cnpj', 'max:255', 'unique:empresas'],
            'nome_empresa' => ['bail','required', 'string', 'max:255', 'unique:empresas'],
            'nome_responsavel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'confirmed', 'email', 'max:255', 'unique:empresas'],
            'password' => ['required', 'confirmed', 'min:8'],
            'telefone' => ['required', 'celular_com_ddd', 'max:255'],
            'cep' => ['required', 'formato_cep', 'max:255'],
            'estado' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'max:255'],
            'logradouro' => ['string', 'max:255'],
        ]);

        $empresa = Empresa::create([
            'CPF_CNPJ' => $request->CPF_CNPJ,
            'nome_empresa' => $request->nome_empresa,
            'nome_responsavel' => $request->nome_responsavel,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'password' => Hash::make($request->password),
        ]);

        $endereco = Endereco::create([
            'empresa_id' => $empresa->id,
            'cep' => $request->cep,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'logradouro' => $request->logradouro,
        ]);

        event(new Registered($empresa));
        event(new Registered($endereco));

        Auth::login($empresa);

        return redirect('/empresa/login')->with('success', "Registrado com Sucesso!");
    }

}
