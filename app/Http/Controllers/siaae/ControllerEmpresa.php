<?php

namespace App\Http\Controllers\siaae;

use App\Http\Controllers\Controller;

class ControllerEmpresa extends Controller
{
    public function login_empresa()
    {
        return view('empresa.login_empresa');
    }

    public function home_empresa(){
        return view('empresa.home', ['userType' => 'empresa']);
    }

    public function lista_vagas() {
        return view('empresa.lista_vagas', ['userType' => 'empresa']);
    }
}
