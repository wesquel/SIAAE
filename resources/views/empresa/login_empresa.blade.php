@extends('layouts.loginLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/login_empresa.css') }}">
@endpush

@section('content')
    <div class="div-form-login">

        <img src="{{asset('images/logo_siaae_cinza.png')}}">
        <form class="flex-column">
            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="CNPJ/CPF">

            <input type="password" class="form-control" aria-describedby="emailHelp" placeholder="Senha">

            <div id="div-button">
                <a class="col-md-4" href="{{ route('home_empresa') }}">
                    <button type="submit" class="system-button system-button-verde-escuro">Entrar</button>
                </a>
                <a class="col-md-8" href="">
                    <button type="submit" class="system-button system-button-branco">Registrar-se</button>
                </a>

            </div>
        </form>
    </div>
@endsection
