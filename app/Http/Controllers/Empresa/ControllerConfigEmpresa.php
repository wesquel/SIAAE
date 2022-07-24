<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use App\Models\Empresa;
use App\Models\Endereco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use const App\Http\Controllers\redirect;

class ControllerConfigEmpresa extends Controller
{
    public function create(){
        return view('empresa.configuracoes', ['endereco' => $this->getEndereco(), 'userType' => 'empresa']);
    }

    public function update(Request $request){
        $validator = $request->validate([
            'nome_empresa' => ['bail','required', 'string', 'max:255'],
            'nome_responsavel' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'telefone' => ['required', 'celular_com_ddd', 'max:255'],
            'cep' => ['required', 'formato_cep', 'max:255'],
            'estado' => ['required', 'string', 'max:255'],
            'cidade' => ['required', 'string', 'max:255'],
            'bairro' => ['required', 'string', 'max:255'],
            'numero' => ['required', 'string', 'max:255'],
            'logradouro' => ['string', 'max:255'],
        ]);
        $empresa = Empresa::findOrFail(Auth::user()->id);
        $empresa->nome_empresa = $request->nome_empresa;
        $empresa->nome_responsavel = $request->nome_responsavel;
        $empresa->telefone = $request->telefone;
        $empresa->email = $request->email;
        $empresa->update();

        $endereco = Endereco::findOrFail(Auth::user()->endereco->id);
        $endereco->cep = $request->cep;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        $endereco->bairro = $request->bairro;
        $endereco->numero = $request->numero;
        $endereco->logradouro = $request->logradouro;
        $endereco->update();

        return redirect('/empresa/configuracoes')->withErrors($validator, 'erros');
    }

    public function getEndereco(){
        return Endereco::where('empresa_id', '=', Auth::user()->id)->get();
    }
}
