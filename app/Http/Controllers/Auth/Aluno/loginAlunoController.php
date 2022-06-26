<?php

namespace App\Http\Controllers\Auth\Empresa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class loginEmpresaController extends Controller
{


    public function create()
    {
        if (Auth::user() != null){
            return redirect('/aluno/home');
        }
        return view('aluno.login');
    }


    public function store(LoginRequest $request)
    {

        $this->validate($request, [
            'matricula'   => 'required|min:10',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('empresa')->attempt(['matricula' => $request->matricula, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/aluno/home');
        }
        return back()->withInput($request->only('matricula', 'remember'));
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
}
