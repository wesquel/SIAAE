@extends('layouts.loginLayout')

@push('custom-styles')
    <link rel="stylesheet" href="{{ asset('css/empresa/login_empresa.css') }}">
@endpush

@section('content')
    <div class="div-form-login">

        <img src="{{asset('images/logo_siaae_cinza.png')}}">

        <form method="POST" action="{{ route('login.empresa') }}" class="flex-column">
            @csrf
            <input id="email" name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email">

            <input id="password" name="password" type="password" class="form-control" aria-describedby="emailHelp" placeholder="Senha">

            <div id="div-button">
                <button type="submit" class="system-button system-button-verde-escuro">Entrar</button>
                <a href="/registro-empresa"><button type="submit" class="system-button system-button-branco">Registrar-se</button></a>

            </div>
        </form>
    </div>
@endsection