<?php

namespace App\Http\Controllers\Empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerHomeEmpresa extends Controller
{
    public function create(){
        return view('empresa.home', ['userType' => 'empresa']);
    }
}
