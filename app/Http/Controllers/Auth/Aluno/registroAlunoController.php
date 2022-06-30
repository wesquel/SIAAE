<?php

namespace App\Http\Controllers\Auth\Aluno;

use App\Http\Controllers\Controller;
use App\Models\Aluno;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class registroAlunoController extends Controller
{
    public function create()
    {
        if (Auth::user() != null){
            return redirect()->intended('/aluno/home');
        }
        return view('aluno.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'matricula' => ['bail','required', 'string', 'max:255', 'unique:alunos'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $aluno = Aluno::create([
            'matricula' => $request->matricula,
            'password' => Hash::make($request->password),
            'ADMIN' => '0',
        ]);

        event(new Registered($aluno));

        Auth::login($aluno);

        return redirect('/registro-empresa')->with('success', "Registrado com Sucesso");
    }
}
