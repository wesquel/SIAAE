<?php

namespace App\Http\Controllers\Auth\Empresa;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginEmpresaController extends Controller
{


    public function create()
    {
        return view('empresa.login');
    }


    public function store(LoginRequest $request)
    {

        $this->validate($request, [
            'CPF_CNPJ'   => 'required|min:10',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('empresa')->attempt(['CPF_CNPJ' => $request->CPF_CNPJ, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/home_empresa');
        }
        return back()->withInput($request->only('CPF_CNPJ', 'remember'));
    }


    public function destroy(Request $request)
    {
        Auth::guard('empresa')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
