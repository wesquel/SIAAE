<?php

namespace App\Http\Controllers\Auth\Aluno;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequestAluno;
use App\Models\Aluno;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class loginAlunoController extends Controller
{

    public function __construct()
    {
        auth()->setDefaultDriver('aluno');
    }

    public function create()
    {
        if (Auth::user() != null){
            return redirect('/aluno/home');
        }
        return view('aluno.login');
    }


    public function store(LoginRequestAluno $request)
    {

        $url = "https://suap.ifpb.edu.br/api/";

        $response = Http::withBasicAuth($request->matricula, $request->password)->get($url);

        //caso o login esteja incorreto.
        if ($response->status() == 403){
            return back()->withInput($request->only('matricula'));
        }

        //verificação se já está cadastrado e aceitou os termos.

        $aluno = Aluno::where('matricula', '=', $request->matricula)->get();

        if (count($aluno) == 0){
            $aluno = $this->createAluno($request->matricula);
        }else{
            $aluno = $aluno[0];
        }

        Auth::login($aluno);

        return redirect()->intended('/aluno/configuraçoes');
    }


    public function destroy(Request $request)
    {

        if (Auth::user() == null){
            return redirect('/aluno/login');
        }

        Auth::guard('aluno')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function createAluno($matricula){
        $aluno = Aluno::create([
            'matricula' => $matricula,
            'ADMIN' => '0',
        ]);
        event(new Registered($aluno));
        return $aluno;
    }

}
