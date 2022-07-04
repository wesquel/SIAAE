<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Endereco;


class teste extends Controller
{
    //
    public function index(){
        print "Hello world!s";
        return view('index');
    }
}
