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
            return redirect('/empresa/home');
        }
        return view('empresa.login');
    }


    public function store(LoginRequest $request)
    {
        $this->validate($request, [
            'CPF_CNPJ'   => 'required|min:10',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('empresa')->attempt(['CPF_CNPJ' => $request->CPF_CNPJ, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/empresa/home');
        }
        return back()->withInput($request->only('CPF_CNPJ', 'remember'));
    }


    public function destroy(Request $request)
    {

        if (Auth::user() == null){
            return view('empresa.login');
        }

        Auth::guard('empresa')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
